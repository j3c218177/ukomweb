<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HasilPeriksa extends Migration
{
	private $table = 'hasil_periksa';

	public function up()
	{
		$this->forge->addField([
			'tanggal_periksa' => [
					'type'           => 'DATE',
			],
			'nama_pasien' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'nama_dokter' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'rumah_sakit' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'hasil' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',
			],
			'treatment' => [
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
