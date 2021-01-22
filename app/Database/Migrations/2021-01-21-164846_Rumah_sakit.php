<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RumahSakit extends Migration
{
	private $table = 'rumah_sakit';
	
	public function up()
	{
		$this->forge->addField([
			'nama_rs' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'lokasi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
		]);
				
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
