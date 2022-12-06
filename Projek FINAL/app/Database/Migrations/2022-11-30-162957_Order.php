<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
			'motode_pembayaran'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'tanggal'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'id_sepatu'      => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('orders');
	}

	public function down()
	{
		//
	}
}
