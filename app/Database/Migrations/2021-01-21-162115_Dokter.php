<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
	private $table = 'dokter';

	public function up()
	{
		$this->forge->addField([
			'id_dokter' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'nama_dokter' => [
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
