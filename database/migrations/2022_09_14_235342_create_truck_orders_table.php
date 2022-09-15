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
        Schema::create('truck_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordered_by')->constrained('users')->onUpate('cascade')->onDelete('cascade');
            $table->foreignId('truck_id')->constrained('trucks')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('order_status', ['PENDING', 'TRANSIT', 'COMPLETE', 'CANCELLED'])->default('PENDING');
            $table->string('cust_lat')->nullable();
            $table->string('cust_long')->nullable();
            $table->string('dest_lat')->nullable();
            $table->string('dest_long')->nullable();
            $table->string('distance_covered');
            $table->string('amount_billed');
            $table->string('currency');
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
        Schema::dropIfExists('truck_orders');
    }
};
