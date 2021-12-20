<?php

use Illuminate\Database\Seeder;
use\App\Models\Package;
class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();
        $package->name = 'Paket Setia';
        $package->count = '50';
        $package->price = '150000';
        $package->save();

        $package = new Package();
        $package->name = 'Paket Cinta';
        $package->count = '100';
        $package->price = '750000';
        $package->value = '1000000';
        $package->save();

        $package = new Package();
        $package->name = 'Paket Kasih';
        $package->count = '1000';
        $package->price = '1250000';
        $package->value = '2000000';
        $package->save();
    }
}
