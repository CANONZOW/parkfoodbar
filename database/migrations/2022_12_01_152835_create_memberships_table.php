<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable();
            $table->string('number_card');
            $table->date('date_of_registration')->nullable();
            $table->string('full_name');
            $table->string('nickname');
            $table->date('date_of_birth')->nullable();
            $table->string('gender');
            $table->string('phone');
            $table->string('job');
            $table->date('date_expired')->nullable();

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
        Schema::dropIfExists('memberships');
    }
}
