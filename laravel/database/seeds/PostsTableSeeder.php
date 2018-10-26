<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if (DB::table('posts')->get()->count() == 0) {
    		DB::table('posts')->insert([
    			
    				'id' => 1,
    				'title' => "First post",
    				'description' => "First description",
    				'status' => 1

    			
    		]);
    	} else {
    		echo "Table posts not empty";
    	}
    }
}
