<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ; $i++){
            DB::table('blogs')->insert([
                'title'=> 'عنوان مقاله',
                'body'=>'متن مقاله' ,
                'url'=>'hi'
            ]);
        }
        
    }
}
