<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuarios')->insert(
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
