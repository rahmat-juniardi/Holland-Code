<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmitModel extends Model
{
    protected $table = 'submit';
    protected $allowedFields = ['nim', 'tanggal', 'skor', 'record_jawaban', 'skor_RIASEC', 'tiga_skor_kode'];

    public function getAllSubmit()
    {

        return $this->findAll();
    }


    public function getSubmit()
    {

        return $this->where('nim', user()->nim)->findAll();
    }

    public function getHasil($nim, $tanggal, $skor)
    {
        // $where = "name='Joe' AND status='boss' OR status='active'";

        return $this->where('tanggal', $tanggal)->where('nim', $nim)->where('skor', $skor)->findAll();
    }
}
