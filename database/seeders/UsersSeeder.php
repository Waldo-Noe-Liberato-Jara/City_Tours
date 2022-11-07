<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
        $users->name = "Waldo Noe Liberato Jara";
        $users->imagen = "admin_profile_picture/rd_admin.jpg";
        $users->rol_id = 1;
        $users->email = "rd@gmail.com";
        $users->password = "Estoyenliga1";
        $users->fondo= 'fondo-negro';
        $users->value= 'Fondo Oscuro';
        $users->save();

        $users1 = new User();
        $users1->name = "User 10";
        $users1->imagen = "users_profile_picture/user10.jpg";
        $users1->rol_id = 2;
        $users1->email = "user10@gmail.com";
        $users1->password = "12345678";
        $users1->save();
        
        $users2 = new User();
        $users2->name = "Daniel Elias Lopez Tarazona";
        $users2->imagen = "admin_profile_picture/Daniel.jpg";
        $users2->rol_id = 1;
        $users2->email = "daniel@gmail.com";
        $users2->password = "12345678";
        $users2->fondo= 'fondo-negro';
        $users2->value= 'Fondo Oscuro';
        $users2->save();

        $users3 = new User();
        $users3->name = "Diego Paolo Lara Cervera";
        $users3->imagen = "";
        $users3->rol_id = 2;
        $users3->email = "diego@gmail.com";
        $users3->password = "12345678";
        $users3->save();
    }
    public function setPasswordAttribute($password) {

        $this->attributes['password'] = bcrypt($password);
    }
}
