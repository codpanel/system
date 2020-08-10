<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortielistproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortielistproducts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('productID')->nullable();
            $table->string('cityID');
            $table->string('quantity');
            $table->string('valid');
            $table->string('statue');
            $table->string('sortie_list_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
            $table->date('saved_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sortielistproducts');
    }
}
