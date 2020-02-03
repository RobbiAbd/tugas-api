<?php

use Illuminate\Database\Seeder;
use \App\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // faker indonesia
        $faker_en = Faker::create('en_US'); // faker amerika

        for($i = 1; $i <= 50; $i++){

            Student::create([
            'nis'   => $faker->unique()->randomNumber,
            'nama'  => $faker->name,
            'kelas' => $faker->numberBetween(10,12)." ".$faker_en->jobTitle." ".$faker->numberBetween(1,4),
            'alamat'    => $faker->address,
            'no_telepon'    => $faker->phoneNumber
        ]);

        }
    }
}
