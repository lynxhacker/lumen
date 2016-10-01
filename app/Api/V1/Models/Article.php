<?php

namespace App\Api\V1\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public function collection()
	{
		return $this->belongsTo('App\Api\V1\Models\Collections');
	}
}