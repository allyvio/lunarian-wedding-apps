<?php

use Illuminate\Database\Seeder;
use\App\Models\Music;
class MusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $music = new Music();
        $music->status = 1;
        $music->save();

        $music = new Music();
        $music->status = 0;
        $music->save();

    }
}
