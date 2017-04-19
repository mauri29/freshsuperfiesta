<?php

use Illuminate\Database\Seeder;

class LikeeableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likeeable = new \App\Models\Likee([
            'user_id' => '1',
            'likeeable_id' => '1',
            'likeeable_type' => 'App\Models\Status',
            'created_at' => '2017-04-18 12:18:32',
            'updated_at' => '2017-04-18 12:18:32',
        ]);
        $likeeable->save();
        $likeeable = new \App\Models\Likee([
            'user_id' => '1',
            'likeeable_id' => '2',
            'likeeable_type' => 'App\Models\Status',
            'created_at' => '2017-04-18 12:18:32',
            'updated_at' => '2017-04-18 12:18:32',
        ]);
        $likeeable->save();        
    }
}