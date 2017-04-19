<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = new \App\Models\Status([
            'user_id' => '1',
            'parent_id' => null,
            'body' => 'Bienvenido a Super Fiesta! - Muchisimas gracias por dejarnos tus comentarios e inquietudes.',
            'created_at' => '2017-04-16 04:21:15',
            'updated_at' => '2017-04-16 04:21:15',
        ]);
        $statuses->save();   
        $statuses = new \App\Models\Status([
            'user_id' => '1',
            'parent_id' => null,
            'body' => 'Herzlich Willkommen bei Super Fiesta! - Vielen Dank für deine Kommentare und Fragen.',
            'created_at' => '2017-04-18 12:28:04',
            'updated_at' => '2017-04-18 12:28:04',
        ]);
        $statuses->save();                       
    }
}