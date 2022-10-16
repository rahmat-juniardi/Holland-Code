<?php

namespace App\Models;


use CodeIgniter\Model;

class HollandModel extends Model
{
    protected $table = 'sds-holland';
    protected $useTimestamps = true;
    protected $allowedFields = ['B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C', 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C', 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C', 'SE1-R', 'SE1-I', 'SE1-A', 'SE1-S', 'SE1-E', 'SE1-C', 'SE2-R', 'SE2-I', 'SE2-A', 'SE2-S', 'SE2-E', 'SE2-C'];

    public function getHolland()
    {

        return $this->findAll();
    }
}
