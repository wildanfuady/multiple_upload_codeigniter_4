<?php namespace App\Models;

use CodeIgniter\Model;

class Galery_model extends Model
{
    protected $table = "galeries";

    public function insertGalery($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}