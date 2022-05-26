<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->text('message')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('abonner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visiteurs');
    }
}
