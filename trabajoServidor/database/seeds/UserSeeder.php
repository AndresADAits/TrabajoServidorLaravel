<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$professions = DB::select('SELECT id FROM professions WHERE title = ?', ['Desarrollador back-end']);

        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        factory(User::class)->create([
            'name' => 'supervisor',
            'email' => 'sup@sup.sup',
            'password' => bcrypt('supervisor'),
            'role_id' => 1,
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'name' => 'usuario',
            'email' => 'usu@usu.usu',
            'password' => bcrypt('usuario'),
            'role_id' => 2,
            'profession_id' => $professionId,
            'is_admin' => true,
        ]);

        factory(User::class, 48)->create();
    }
}