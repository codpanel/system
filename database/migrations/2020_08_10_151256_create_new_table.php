<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('tel');
            $table->string('adress');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
            $table->string('cityID');
            $table->string('city');
            $table->text('note');
            $table->string('source');
            $table->string('quantity');
            $table->string('ProductReference');
            $table->string('price');
            $table->string('productID');
            $table->softDeletes();
            $table->timestamp('duplicated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new');
    }
}
