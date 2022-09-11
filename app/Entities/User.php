<?php

namespace App\Entities;

use Myth\Auth\Entities\User as MythUser;

class User extends MythUser
{
    /**
     * Default attributes.
     * @var array
     */
    protected $attributes = [
        'nama_lengkap' => 'mahasiswa',

    ];

    /**
     * Returns a full name: "first last"
     *
     * @return string
     */
    public function getName()
    {
        return trim(trim((string)$this->attributes['nama_lengkap']));
    }
}
