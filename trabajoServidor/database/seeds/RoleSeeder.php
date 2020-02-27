<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'nombre_rol' => 'administrador',
        ]);

        Role::create([
            'id' => 2,
            'nombre_rol' => 'estudiante',
        ]);
    }
}
