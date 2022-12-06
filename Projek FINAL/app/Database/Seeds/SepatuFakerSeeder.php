<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SepatuFakerSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');

		for ($i = 0; $i < 50; $i++) {

			$data = [
				'id' => $i + 1,
				'image' => $faker->randomElement(['/img/product/adidas.png', '/img/product/newbalance.png', '/img/product/nike.png', '/img/product/puma.png']),
				'harga_sepatu' => $faker->randomElement([750000, 125000, 150000, 2000000, 450000, 3500000]),
				'no_sepatu' => $faker->numberBetween(40, 50),
				'brand' => $faker->randomElement(["Nike", "Adidas", "AirJordan", "Puma", "NewBalance", "Yeezy"]),
				'stok' => $faker->numberBetween(10, 50),

			];
			$this->db->table('sepatus')->insert($data);
		}
	}
}
