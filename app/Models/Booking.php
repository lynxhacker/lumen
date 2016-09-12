<?php 
	namespace App\Models; 

	use Illuminate\Database\Eloquent\Model; 

	final class Booking extends Model
	{
		protected $table = 'bookings'; 

		protected $fillable = ['appointment_name', 'appointment_description']; 

		public function category(){
			return $this->belongsTo('App\Models\Category'); 
		}
	}