<?php namespace App\Controllers;

class Database extends BaseController
{
	public function __construct() {
        $this->session = \Config\Services::session();
        $this->db = \Config\Database::connect();

    }
	
	public function index()
	{
		return view('database');
	}

	public function no1() {
		$query = $db->query('SELECT kelurahan, jumlah FROM wilayah GROUP BY kelurahan');
	}

	//--------------------------------------------------------------------

}
