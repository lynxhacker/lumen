<?php 
	namespace App\Models; 

	use Illuminate\Database\Eloquent\Model; 

	final class Category extends Model
	{
		protected $table = 'category'; 

		protected $fillable = ['category_name']; 

		public function bookings(){
			return $this->hasMany('App\Models\Booking'); 
		}
	}