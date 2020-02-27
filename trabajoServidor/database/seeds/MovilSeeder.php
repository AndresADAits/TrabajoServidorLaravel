<?php
use App\Movil;
use Illuminate\Database\Seeder;

class MovilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movil::create([
            'modelo' => 'S10',
            'marca' => 'Samsung',
            'rom' => 128,
            'ram' => 6,
            'bateria' => '3500',
            'precio' => 1000,
        ]);

        Movil::create([
            'modelo' => 'X10',
            'marca' => 'Apple',
            'rom' => 256,
            'ram' => 8,
            'bateria' => 4000,
            'precio' => 1500,
        ]);
        Movil::create([
            'modelo' => '3310',
            'marca' => 'Nokia',
            'rom' => 1,
            'ram' => 1,
            'bateria' => 500,
            'precio' => 20,
        ]);
    }
}