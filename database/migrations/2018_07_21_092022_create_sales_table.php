<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('representive_id');
            $table->integer('client_id');
            $table->text('location');
            $table->date('date_of_meeting');
            $table->time('time');
            $table->text('discussion');
            $table->text('current_work');
            $table->varchar('sell_our_destination',50);
            $table->text('throughput');
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
        Schema::dropIfExists('sales');
    }
}
