<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('CityID');
            $table->integer('stockTheorique');
            $table->integer('StockPhisique');
            $table->integer('stockEnCours');
            $table->string('Livre');
            $table->integer('Recue');
            $table->integer('ProduitID');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->string('User_id');
            $table->string('stockRetour');
            $table->string('stockVirtuel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock');
    }
}
