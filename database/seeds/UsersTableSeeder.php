<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new User();
        $admin->nombres="Francisco Joel";
        $admin->apellidos="Marin Calderón";
        $admin->cedula="1315311009";
        $admin->email="admin@admin.com";
        $admin->password=bcrypt('admin123');
        $admin->save();

        $socio=new User();
        $socio->nombres="Limberth Esneider";
        $socio->apellidos="Santander Alcivar";
        $socio->cedula="1234567890";
        $socio->email="socio@socio.com";
        $socio->password=bcrypt('socio123');
        $socio->save();

        $moderador=new User();
        $moderador->nombres="Martita Julieta";
        $moderador->apellidos="Kardashian Mendoza";
        $moderador->cedula="0987654321";
        $moderador->email="moderador@moderador.com";
        $moderador->password=bcrypt('moderador');
        $moderador->save();

        $admin->assignRole('administrador');
        $socio->assignRole('socio');
        $moderador->assignRole('moderador');

    }
}