<?php
use App\Portatiles;
use Illuminate\Database\Seeder;

class PortatilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Portatiles::create([
            'nombre' => 'Yoga',
            'marca' => 'Lenovo',
            'ram' => 8,
            'tgrafica' => '1660GTX',
            'precio' => 1500,
        ]);
        Portatiles::create([
            'nombre' => 'BookPro',
            'marca' => 'Dell',
            'ram' => 16,
            'tgrafica' => '1660tiGTX',
            'precio' => 2500,
        ]);
        Portatiles::create([
            'nombre' => 'MacBookProX',
            'marca' => 'Apple',
            'ram' => 32,
            'tgrafica' => '2080GTX',
            'precio' => 3500,
        ]);

    }
}
