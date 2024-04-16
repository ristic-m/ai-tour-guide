<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'gender', 'country_of_origin', 'destination', 'accessibility_needs'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

