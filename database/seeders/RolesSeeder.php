<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Roles();
        $rol->rol = "Administrador";
        $rol->save();

        $rol1 = new Roles();
        $rol1->rol = "Usuario";
        $rol1->save();
    }
}
