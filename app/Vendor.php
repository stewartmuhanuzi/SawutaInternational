<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
	// protected $table = 'vendors';
	 protected $guarded = [];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
