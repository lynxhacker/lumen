<?php

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $table = [
    	'Collection'
    ]; 

    public function run()
    {
       /*Model::unguard(); 

        foreach($this->truncate as $table) {
        	//empty table
        	DB::table($table)->truncate(); 

        	//seed table
        	$this->call(ucfirst($table).'TableSeeder'); 
        }

        Model::reguard();*/
        $this->call('CollectionTableSeeder');
    }
}
