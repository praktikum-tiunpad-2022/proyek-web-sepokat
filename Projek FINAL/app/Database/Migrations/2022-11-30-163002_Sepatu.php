<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sepatu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'image'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'harga_sepatu'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'no_sepatu'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'brand' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'stok'      => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('sepatus');
	}

	public function down()
	{
		//
	}
}
