<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $guarded = ['id'];

	protected $fillable = [
		'nis','nama','kelas','alamat','no_telepon',
	];
}
