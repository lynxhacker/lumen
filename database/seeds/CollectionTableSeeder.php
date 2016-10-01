<?php 

use Illuminate\Database\Seeder; 

class CollectionTableSeeder extends Seeder
{
	public function run()
	{
		factory('App\Api\V1\Models\Collections', 50)->create(); 
	}
}