<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_order_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_order_id')->constrained('truck_orders')->onUpdate('cascade')->onDelete('cascade');
            $table->string('amount_paid');
            $table->string('currency');
            $table->string('transaction_id');
            $table->text('details');
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
        Schema::dropIfExists('truck_order_payments');
    }
};
