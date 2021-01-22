<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PerBulan extends Migration
{
	private $table = 'per_bulan';
	
	public function up()
	{
		$this->forge->addField([
			'tahun' => [
					'type'           => 'INT',
					'constraint'     => '4',
			],
			'bulan' => [
					'type'           => 'VARCHAR',
					'constraint'     => '15',
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
