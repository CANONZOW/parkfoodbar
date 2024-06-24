<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->nullable();
            $table->date('tgl')->nullable();
            $table->bigInteger('users_id');
            $table->string('no_hp')->nullable();

            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->string('negara')->default('Indoenesia');
            $table->string('kota')->default('Kota-Jambi');
            $table->string('provinsi')->default('Jambi');
            $table->string('kodepos')->nullable();

            $table->bigInteger('total_price')->default(0);
            $table->biginteger('shipping_price')->default(0);
            $table->string('status')->default('PENDING');
            $table->string('payment')->default('COD');

            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
