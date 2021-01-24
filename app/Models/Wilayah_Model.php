<?php namespace App\Models;

use CodeIgniter\Model;

class Wilayah_Model extends Model
{
    protected $table      = 'wilayah';
    protected $primaryKey = '';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false; //Kalo ingin menjalankan soft delete, harus ada cretedField, updatedField, deletedField

    protected $allowedFields = ['kab_kota','kecamatan','kelurahan','jumlah'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}