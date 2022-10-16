<?php

namespace App\Controllers;

use App\Models\SubmitModel;
use App\Models\UserModel;

class Admin extends BaseController
{

    protected $db, $builder;



    public function __construct()
    {
        $this->db     = \Config\Database::connect();
        $this->builder = $this->db->table('users');


        $this->submitModel = new SubmitModel();
        $this->userModel = new UserModel();
        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['tanggal'] = $this->tgl_indo();
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();


        // $this->builder->select('users.id as userid, nim, email, name');
        // $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->select('email, nim, nama_lengkap, umur, jenis_kelamin, pendidikan, jurusan, pekerjaan_ayah, pekerjaan_ibu');
        $query = $this->builder->get();

        $data['users'] = $query->getResultArray();

        $db      = \Config\Database::connect();
        $builder = $db->table('submit');
        $builder->select('users.nim as usernim, users.email,nama_lengkap, submit.tanggal, submit.skor, submit.tiga_skor_kode');
        $builder->join('users', 'users.nim = submit.nim');
        $query = $builder->get();
        $data['submit'] = $query->getResultArray();

        return view('admin/index', $data);
    }

    public function profile()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->getWhere(['nim' => user()->nim]);
        $dataUser = get_object_vars($query->getResult()[0]);


        $data['title'] = 'Detail Mahasiswa';
        $data['tanggal'] = $this->tgl_indo();
        $data['biodata'] = $dataUser;


        return view('admin/profile', $data);
    }

    public function updateBiodata()
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['tanggal'] = $this->tgl_indo();

        $data_baru['email'] = user()->email;
        $data_baru['nama_lengkap'] = $this->request->getVar('nama_lengkap');
        $data_baru['pendidikan'] = $this->request->getVar('pendidikan');
        $data_baru['jurusan'] = $this->request->getVar('jurusan');
        $data_baru['umur'] = $this->request->getVar('umur');
        $data_baru['jenis_kelamin'] = $this->request->getVar('jenis_kelamin');
        $data_baru['pekerjaan_ayah'] = $this->request->getVar('pekerjaan_ayah');
        $data_baru['pekerjaan_ibu'] = $this->request->getVar('pekerjaan_ibu');

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->set($data_baru);
        $builder->update($data_baru, 'nim = ' . user()->nim);



        return redirect()->to(base_url() . '/profile');
    }

    // public function submit2()
    // {
    //     $data['title'] = 'Daftar Mahasiswa';
    //     $data['tanggal'] = $this->tgl_indo();
    //     // $users = new \Myth\Auth\Models\UserModel();
    //     // $data['users'] = $users->findAll();


    //     $this->builder->select('users.id as userid, nim, email, name');
    //     $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
    //     $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    //     $query = $this->builder->get();

    //     $data['users'] = $query->getResult();

    //     return view('admin/submit', $data);
    // }

    public function submit()
    {

        $data['title'] = 'Daftar Hasil Survey';

        $data['tanggal'] = $this->tgl_indo();


        $db      = \Config\Database::connect();
        $builder = $db->table('submit');
        $builder->select('users.nim as usernim, users.email,nama_lengkap, submit.tanggal, submit.skor, submit.tiga_skor_kode, submit.status_skor, submit.id');
        $builder->join('users', 'users.nim = submit.nim');
        $query = $builder->get();
        $data['submit'] = $query->getResultArray();



        return view('admin/submit', $data);
    }

    public function update_status_skor()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('submit');
        $builder->select('id');
        $id_submit = $builder->get()->getResultArray();

        $status_skor = [];

        for ($i = 0; $i < count($id_submit); $i++) {
            $temp['id'] = $id_submit[$i]['id'];
            ($this->request->getVar($id_submit[$i]['id']) == null) ?
                $temp['status_skor'] = 'Tidak tampil' :
                $temp['status_skor'] = $this->request->getVar($id_submit[$i]['id']);
            $status_skor[$i] = $temp;
        }

        $builder->updateBatch($status_skor, 'id');

        return redirect()->to(base_url() . '/submit');
    }

    public function detail($id = 0)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['tanggal'] = $this->tgl_indo();


        $this->builder->select('users.id as userid, nim, email,nama_lengkap, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    public function tgl_indo()
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', date('Y-m-d'));

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
