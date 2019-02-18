<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 0; $i < 10 ; $i++) {
	    	DB::table('books')->insert([
	    		'title'=> str_random(10),
	    		'author'=> str_random(10),
	    		'created_at'=> date("Y-m-d H:i:s") ,
	    		'updated_at'=> date("Y-m-d H:i:s") ,
	    	]);
    	}
    }
}
