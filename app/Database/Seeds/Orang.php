<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use DateTime;

class Orang extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create('id_ID');
		for ($i = 0; $i < 1000; $i++) {
			$data = [
				'nama'			=>	$faker->name,
				'alamat'		=>	$faker->streetAddress,
				// 'no_rumah'		=>	$faker->buildingNumber,
				'kota'			=>	$faker->city,
				'kodepos'		=>	$faker->postcode,
				'created_at'	=> 	Time::createFromTimestamp($faker->unixTime()),
				'updated_at'	=>	Time::now()
				// 'updated_at'	=> Time::createFromTimestamp($faker->unixTime())
			];
			$this->db->table('orang')->insert($data);
		}
	}
}