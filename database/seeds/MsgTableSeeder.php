<?php

use Illuminate\Database\Seeder;
use App\Msg;

class MsgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('msgs')->delete();
			
		for($i=0;$i<5;$i++){
			Msg::create([
				'title' => 'title'.$i,
				'author'=>'author'.$i,
				'body'=>'body'.$i,
			]);
		}
    }
}
