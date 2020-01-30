<?php

use Illuminate\Database\Seeder;
use \App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
        	'nis'	=> '12345',
        	'nama'	=> 'Robbi',
        	'kelas'	=> 'XII RPL 2',
        	'alamat'	=> 'Ds.sindang',
        	'no_telepon'	=> '085294441998'
        ]);

        Student::insert([
        	'nis'	=> '12346',
        	'nama'	=> 'Abdul',
        	'kelas'	=> 'XII RPL 2',
        	'alamat'	=> 'Ds.cikijing',
        	'no_telepon'	=> '085294441889'
        ]);

        Student::insert([
            'nis'   => '12347',
            'nama'  => 'Rohman',
            'kelas' => 'XII RPL 1',
            'alamat'    => 'Ds.talaga',
            'no_telepon'    => '085294441885'
        ]);
    }
}
