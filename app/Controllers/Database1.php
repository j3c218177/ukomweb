<?php namespace App\Controllers;

use App\Models\Wilayah_Model;

class Database1 extends BaseController
{
	public function __construct() {
        $this->session = \Config\Services::session();

        $this->wilayahModel = new Wilayah_Model();
    }
	
	public function index()
	{
		$data['session'] = $this->session->getFlashdata('response');
        $data['dataWilayah'] = $this->wilayahModel->findAll();

		var_dump($data);die;

		echo view('motion', $data);
	}

	//--------------------------------------------------------------------

}
