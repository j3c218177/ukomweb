<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
	private $table = 'pasien';
	
	public function up()
	{
		$this->forge->addField([
			'nama_pasien' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'usia' => [
					'type'           => 'INT',
					'constraint'     => '3',
			],
			'jenis_kelamin' => [
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
