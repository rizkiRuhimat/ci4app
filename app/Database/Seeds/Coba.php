<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class Coba extends \CodeIgniter\Database\Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for ($i = 0; $i < 10000; $i++) {
			$data = [
				'nama' 		=> $faker->name,
				'alamat'	=>	$faker->address,
				'telp' 		=> $faker->phoneNumber,
				'hp'		=> $faker->phoneNumber,
				'dob'		=> $faker->dateTimeThisCentury->format('Y-m-d')
			];
			$this->db->table('tb_testnama')->insert($data);
		}
	}
}