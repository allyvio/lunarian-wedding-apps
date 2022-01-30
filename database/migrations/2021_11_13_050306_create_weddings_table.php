<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('calon_pria', 100);
            $table->string('calon_wanita', 100);
            $table->string('calon_pria_photo')->nullable();
            $table->string('calon_wanita_photo')->nullable();
            $table->text('quote')->nullable();
            $table->enum('theme', ['tropical','rustic','classic']);
            $table->softDeletes();
            $table->timestamps();
            $table->index(['id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weddings');
    }
}
