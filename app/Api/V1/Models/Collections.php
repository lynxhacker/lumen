<?php 
namespace App\Api\V1\Models;
use Illuminate\Database\Eloquent\Model; 

class Collections extends Model
{	
	public $timestamps = false;

	public $incrementing = false;

	public function articles()
	{
		return $this->hasMany('App\Api\V1\Models\Article'); 
	}
}