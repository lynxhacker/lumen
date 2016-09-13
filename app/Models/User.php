<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; 

final class User extends Model
{
	protected $table = "users"; 

	protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];
}