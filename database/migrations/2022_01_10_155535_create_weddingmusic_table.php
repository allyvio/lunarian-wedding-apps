<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingmusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddingmusic', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wedding_id');
            $table->foreignId('music_id');
            $table->integer('status');
            $table->timestamps();

            $table->index(['wedding_id', 'music_id', 'id'], 'weddingmusic_index');
            $table->foreign('wedding_id')->references('id')->on('weddings')->onDelete('cascade');
            $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weddingmusic');
    }
}
