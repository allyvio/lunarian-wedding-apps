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
        $package->name = 'Basic';
        $package->count_invitation = '0';
        $package->price = '59000';
        $package->value = '80000';
        $package->count_galleri = '6';
        $package->save();

        $package = new Package();
        $package->name = 'Premium';
        $package->count_invitation = '50';
        $package->price = '99000';
        $package->value = '180000';
        $package->count_galleri = '12';
        $package->save();

        $package = new Package();
        $package->name = 'Ekclusif';
        $package->count_invitation = '150';
        $package->price = '129000';
        $package->value = '260000';
        $package->count_galleri = '21';
        $package->save();
    }
}
