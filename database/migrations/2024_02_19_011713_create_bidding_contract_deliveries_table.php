<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bidding_contract_deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidding_form_id');
            $table->string('performance_type');
            $table->string('purchase_order_no');
            $table->date('date_received');
            $table->date('proceed_receive_date');
            $table->string('dr_no');
            $table->date('delivery_date');
            $table->string('delivery_status');
            $table->string('si_no');
            $table->date('si_date');
            $table->timestamps();
            $table->foreign('bidding_form_id')->references('id')->on('bidding_forms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidding_contract_deliveries');
    }
};
