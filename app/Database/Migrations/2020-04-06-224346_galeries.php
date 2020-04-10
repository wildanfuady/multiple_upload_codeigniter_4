<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Galeries extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       	=> TRUE,
				'auto_increment' 	=> TRUE
			],
			'upload_id'	=> [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'null'			 => TRUE
			],
			'gambar'	=> [
				'type'           => 'VARCHAR',
				'constraint'     => 250,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('upload_id','uploads','id','CASCADE','CASCADE');
		$this->forge->createTable('galeries');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
