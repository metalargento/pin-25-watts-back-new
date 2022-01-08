<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('post')->insert(
            array(
                0 => array(
                    'name'        =>'name',
                    'email'        =>'correo electronico',
                    'phone'        =>'telefono',
                    'message'        =>'mensaje'
                )
                )
                );
    }
}
