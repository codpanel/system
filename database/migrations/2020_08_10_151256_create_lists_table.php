<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('source');
            $table->string('DeliverID');
            $table->string('mowadafaID');
            $table->string('cityID');
            $table->string('name');
            $table->string('adress');
            $table->string('tel');
            $table->text('note');
            $table->string('prix_de_laivraison')->nullable();
            $table->text('cancel_reason');
            $table->string('statue');
            $table->timestamp('to_show_again')->nullable();
            $table->string('time_to_deliver');
            $table->string('no_answer');
            $table->timestamp('no_answer_time')->nullable();
            $table->text('log');
            $table->string('active');
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('delivred_at')->nullable();
            $table->softDeletes();
            $table->timestamp('canceled_at')->nullable();
            $table->timestamp('duplicated_at')->nullable();
            $table->string('outzone_adress');
            $table->text('check_note');
            $table->timestamp('checked_at')->nullable();
            $table->timestamp('horszoned_at')->nullable();
            $table->timestamp('to_deliver_at')->nullable();
            $table->timestamp('recall_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->text('history')->nullable();
            $table->string('product')->nullable();
            $table->string('city')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('suivi_tentative')->nullable();
            $table->string('count_no_answer')->nullable();
            $table->string('count_no_answer_employee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists');
    }
}
