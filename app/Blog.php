<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
	protected $fillable = [
		'id', 'tieude', 'noidung',
	];
	public $timestamps = false;
}
