<?php

namespace App\Models;

use Myth\Auth\Models\UserModel as MythModel;

class UserModel extends MythModel
{
    protected $returnType = 'App\Entities\User';
    protected $allowedFields = [
        'email', 'nim', 'nama_lengkap', 'user_image', 'umur', 'jenis_kelamin', 'pendidikan', 'jurusan', 'pekerjaan_ayah', 'pekerjaan_ibu', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',

    ];

    public function getAllSubmit()
    {

        return $this->findColumn('nama_lengkap', 'nim', 'email');
    }

    public function getUser()
    {

        return $this->where('nim', user()->nim)->findAll();
    }
}
