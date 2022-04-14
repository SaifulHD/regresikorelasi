<?php

namespace App\Models;

use CodeIgniter\Model;

class InputModel extends Model
{
    protected $table = 'input_data';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nilaiX',
        'nilaiY',
        'nilaiXkuadrat',
        'nilaiYkuadrat',
        'nilaiXY'
    ];

    public function datainput()
    {
        return $this->table('input_data')->findall();
    }

    public function add($data)
    {
        return $this->db->table('input_data')->insert($data);
    }

    public function insertexceldata($data)
    {
        $this->db->table('input_data')->insert($data);
    }

    public function sumsum()
    {
        $query = $this->db->query("SELECT SUM(nilaiX) AS nilaiX, SUM(nilaiY) AS nilaiY, SUM(nilaiXkuadrat) AS nilaiXkuadrat,SUM(nilaiYkuadrat) AS nilaiYkuadrat, SUM(nilaiXY) AS nilaiXY, COUNT(id) as jumlah FROM input_data");
        //dd($query->getResult());
        return $query->getResult();
    }
}
