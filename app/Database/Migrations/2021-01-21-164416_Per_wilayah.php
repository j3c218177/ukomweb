<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PerWilayah extends Migration
{
	private $table = 'per_wilayah';
	
	public function up()
	{
		$this->forge->addField([
			'kab_kota' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'kecamatan' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'kelurahan' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'jumlah' => [
					'type'           => 'INT',
					'constraint'     => '100',
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
