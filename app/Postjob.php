<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postjob extends Model
{
    protected $guarded = [];

    public function user()
    {
        // A Job post belongs to a user

        return $this->belongsTo(User::class);
    }

}
