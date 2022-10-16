<?php

namespace App\Controllers;

use App\Models\HollandModel;
use App\Models\SubmitModel;
use App\Models\UserModel;
use phpDocumentor\Reflection\Types\Null_;

use CodeIgniter\Files\File;

use Dompdf\Dompdf;
use phpDocumentor\Reflection\Types\Boolean;

class User extends BaseController
{
    protected $hollandIndex =  array(
        "bagian" => array("B1", "B2", "B3", "SE1", "SE2"),
        "tabel" => array("R", "I", "A", "S", "E", "C")
    );

    protected $helpers = ['form'];



    protected $columnName = ['B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C', 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C', 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C', 'SE1-R', 'SE1-I', 'SE1-A', 'SE1-S', 'SE1-E', 'SE1-C', 'SE2-R', 'SE2-I', 'SE2-A', 'SE2-S', 'SE2-E', 'SE2-C'];

    public function __construct()
    {
        $this->hollandModel = new HollandModel();
        $this->submitModel = new SubmitModel();
        $this->userModel = new UserModel();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->getWhere(['nim' => user()->nim]);
        $dataUser = get_object_vars($query->getResult()[0]);


        $data['title'] = 'Detail Mahasiswa';
        $data['tanggal'] = $this->tgl_indo();
        $data['biodata'] = $dataUser;


        return view('user/index', $data);
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



        return redirect()->to(base_url() . '/user');
    }

    public function saveImage()
    {
        // if (!$this->validate([
        //     'foto' => [
        //         'rules' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
        //         'error' => [
        //             'uploaded' => 'Pilih gambar terlebih dahulu',
        //             'is_image' => 'Yang anda pilih bukan file gambar',
        //             'mime_in' => 'Yang anda pilih bukan file gambar',
        //         ]
        //     ]
        // ])) {
        //     return redirect()->to(base_url() . '/user')->withInput();
        // }

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getName() == '') {
            return redirect()->to(base_url() . '/user');
        }




        $namaFoto = user()->nim . '.' . $fileFoto->getExtension();
        // pindahkan ke folder

        $namaFotoLama = $this->request->getVar('namaFoto');

        if ($namaFotoLama != 'default.png') {
            if (file_exists("public2/image_user/" . $namaFotoLama)) {
                // dd("The file exists");
                unlink("public2/image_user/" . $namaFotoLama);
            } else {
                // dd("The file does not exist");
                $data_baru['user_image'] = "default.png";

                $db      = \Config\Database::connect();
                $builder = $db->table('users');
                $builder->set($data_baru);
                $builder->update($data_baru, 'nim = ' . user()->nim);
            }
        }

        $fileFoto->move('public2/image_user', $namaFoto);

        $data_baru['user_image'] = $namaFoto;

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->set($data_baru);
        $builder->update($data_baru, 'nim = ' . user()->nim);

        return redirect()->to(base_url() . '/user');
    }


    public function update_image()
    {

        $img = $this->request->getFile('image');

        if (!$img->hasMoved()) {
            $filepath = WRITEPATH . 'public2/image-user' . $img->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return redirect()->to(base_url() . '/user');
        }
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


    public function riwayat()
    {

        $data['title'] = 'Riwayat Survey';

        $data['tanggal'] = $this->tgl_indo();
        $data['submit'] = $this->submitModel->getSubmit();


        return view('user/riwayat', $data);
    }



    public function holland_code()
    {
        $data['title'] = 'Holland Code';

        $data['tanggal'] = $this->tgl_indo();
        $data['submit'] = $this->submitModel->getSubmit();


        return view('user/holland-code', $data);
    }

    public function survey($nim = 0)
    {
        $bagian = 'bagian-1';
        $data['title'] = 'Survey Holland - ' . $nim;
        $data['bagian'] = $bagian;
        $data['holland'] = $this->hollandModel->getHolland();



        return view('holland/index', $data);
    }

    public function save($nim = 0)
    {

        $data['holland'] = $this->hollandModel->getHolland();
        $data['hollandIndex'] = $this->hollandIndex;
        $data['title'] = 'Dashboard Survey';

        // declaration array to input input getVar
        $survey_data = [];

        // push value into array json
        for ($i = 0; $i < count($this->columnName); $i++) {
            $j = 1;

            $survey_data[$this->columnName[$i]] = []; //create associate name array

            foreach ($this->hollandModel->getHolland() as $h) {

                if ($h[$this->columnName[$i]] != "") {
                    // echo $this->columnName[$i] . '-' . $j  . " : " . $this->request->getVar($this->columnName[$i] . '-' . $j) . "<br>";
                    $survey_data[$this->columnName[$i]];
                    array_push($survey_data[$this->columnName[$i]], $this->request->getVar($this->columnName[$i] . '-' . $j++));
                }
            };
        };

        // temp var declaraion survey_data value
        $hollandNilai = array(
            "R" => 0,
            "I" => 0,
            "A" => 0,
            "S" => 0,
            "E" => 0,
            "C" => 0
        );

        // Counting number value from input survey
        for ($i = 0; $i < count($this->columnName); $i++) {
            $j = 1;

            foreach ($this->hollandModel->getHolland() as $h) {

                if ($h[$this->columnName[$i]] != "") {

                    foreach ($this->hollandIndex['tabel'] as $t) {

                        if (strpos($this->columnName[$i], $t) !== false) {
                            $temp = $this->request->getVar($this->columnName[$i] . '-' . $j);
                            $name = $this->columnName[$i] . '-' . $j;

                            if ($temp == 'Y' or $temp == 'S') {
                                // echo $this->columnName[$i] . '-' . $j    . " : '" . $temp . "' " . "<br>";
                                $hollandNilai[$t] += 1;
                                // echo "nilai : " . $hollandNilai[$t] . "<br>";
                            } elseif (strpos($name, "-S-") !== false and strpos($name, "-1") !== false) {
                                //  !!! 'S' part get up 'if' position because in this counting function have bug at part of 'S'

                                // echo $this->columnName[$i] . '-' . $j    . " : '" . $temp . "' " . "<br>";
                                // echo $hollandNilai[$t] . "|" . $temp;

                                $hollandNilai[$t] += (int)$temp;

                                // echo "nilai : " . $hollandNilai[$t] . "<br>";
                            } elseif (strpos($name, "-R-") !== false and strpos($name, "-1") !== false) {
                                $hollandNilai[$t] += (int)$temp;
                            } elseif (strpos($name, "-I-") !== false and strpos($name, "-1") !== false) {
                                $hollandNilai[$t] += (int)$temp;
                            } elseif (strpos($name, "-A-") !== false and strpos($name, "-1") !== false) {
                                $hollandNilai[$t] += (int)$temp;
                            } elseif (strpos($name, "-E-") !== false and strpos($name, "-1") !== false) {
                                $hollandNilai["E"] += (int)$temp;
                            } elseif (strpos($name, "-C-") !== false and strpos($name, "-1") !== false) {
                                $hollandNilai["C"] += (int)$temp;
                            }
                            $j++;
                        }
                    }
                };
            };
        };

        // counting total nilai
        $tempNilaiTotal = 0;
        $shortnilai = [];

        foreach ($this->hollandIndex['tabel'] as $t) {
            // echo "nilai " . $t . " : " . $hollandNilai[$t] . "<br>";

            $shortnilai[$t] = $hollandNilai[$t];
            $tempNilaiTotal += $hollandNilai[$t];
        }
        // echo "nilai total : " . $tempNilaiTotal . "<br>";

        // counting 3 highest rank code
        // $shortnilai = array_reverse($shortnilai);
        arsort($shortnilai);

        $TigaSkorTertinggi = [];
        $keys = array_keys($shortnilai);
        for ($i = 0; $i < 3; $i++) {
            if ($shortnilai[$keys[$i]] != 0) {
                // $TigaSkorTertinggi[$i] = array_search($shortnilai[$keys[$i]], $shortnilai);
                $TigaSkorTertinggi[$i] = $keys[$i];
            }
        }


        $hasil = [
            'nim' => user()->nim,
            'tanggal'   => $this->tgl_indo(),
            'skor' => (string)$tempNilaiTotal,
            'record_jawaban' => json_encode($survey_data),
            'skor_RIASEC' => json_encode($hollandNilai),
            'tiga_skor_kode' => json_encode($TigaSkorTertinggi),
        ];

        $this->submitModel->save($hasil);

        return redirect()->to(base_url() . '/riwayat');
    }

    public function hasil($nim, $tanggal, $skor)
    {
        $tanggal = str_replace("-", " ", $tanggal);
        $temp = $this->submitModel->getHasil($nim, $tanggal, $skor);
        $hasil = $temp[0];

        $tiga_skor = str_replace('"', "", $hasil['tiga_skor_kode']);
        $tiga_skor = str_replace('[', "[ ", $tiga_skor);
        $tiga_skor = str_replace(']', " ]", $tiga_skor);
        $tiga_skor = str_replace(',', " ][ ", $tiga_skor);

        $data = [
            'title' => 'Hasil Survey',
            'tanggal'   => $hasil['tanggal'],
            'skor' => $hasil['skor'],
            'record_jawaban' => json_decode($hasil['record_jawaban'], true),
            'skor_RIASEC' => json_decode($hasil['skor_RIASEC'], true),
            'tiga_skor_kode' => $tiga_skor,
            'hollandIndex' => $this->hollandIndex['tabel'],
            'columnName' => $this->columnName

        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->getWhere(['nim' => user()->nim]);
        $dataUser = get_object_vars($query->getResult()[0]);

        $data['biodata'] = $dataUser;




        // dd($data['record_jawaban']['SE2-I'][0]);

        // dd($ti);

        return view('user/hasil', $data);
    }

    public function downloadHasil($nim, $tanggal, $skor)
    {
        $tanggal = str_replace("-", " ", $tanggal);
        $temp = $this->submitModel->getHasil($nim, $tanggal, $skor);
        $hasil = $temp[0];

        $tiga_skor = str_replace('"', "", $hasil['tiga_skor_kode']);
        $tiga_skor = str_replace('[', "[ ", $tiga_skor);
        $tiga_skor = str_replace(']', " ]", $tiga_skor);
        $tiga_skor = str_replace(',', " ][ ", $tiga_skor);

        $data = [
            'title' => 'Hasil Survey',
            'tanggal'   => $hasil['tanggal'],
            'skor' => $hasil['skor'],
            'record_jawaban' => json_decode($hasil['record_jawaban'], true),
            'skor_RIASEC' => json_decode($hasil['skor_RIASEC'], true),
            'tiga_skor_kode' => $tiga_skor,
            'hollandIndex' => $this->hollandIndex['tabel'],
            'columnName' => $this->columnName

        ];

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $query = $builder->getWhere(['nim' => user()->nim]);
        $dataUser = get_object_vars($query->getResult()[0]);

        $data['biodata'] = $dataUser;

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('user/hasilDownload', $data));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream();
    }
}
