<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserFakerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            // Random Name User
            $first_name = $faker->firstName();
            $last_name = $faker->lastName();
            $password = "12345";

            $data = [
                'id' => $i + 1,
                'name' => $first_name . " " . $last_name,
                'email' => $first_name . "@gmail.com",
                'alamat_cust' => $faker->address(),
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];
            $this->db->table('users')->insert($data);
        }
    }
}
