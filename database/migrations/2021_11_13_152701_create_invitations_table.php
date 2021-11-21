<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->char('code', 6);
            $table->foreignId('wedding_id');
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->tinyInteger('count');
            $table->enum('status', ['hadir', 'tidak hadir'])->nullable();
            $table->timestamp('invited_at')->nullable();
            $table->timestamp('opened_at')->nullable();
            $table->timestamp('rsvp_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index(['wedding_id', 'code', 'invited_at', 'opened_at', 'rsvp_at', 'id', 'status'], 'invitations_index');
            $table->foreign('wedding_id')->references('id')->on('weddings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
}
