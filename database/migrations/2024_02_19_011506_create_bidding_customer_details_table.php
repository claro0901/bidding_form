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
        Schema::create('bidding_customer_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidding_form_id');
            $table->string('executive_name');
            $table->string('procuring_entity');
            $table->string('address');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('bac_secretariat');
            $table->string('bac_chair');
            $table->timestamps();
            $table->foreign('bidding_form_id')->references('id')->on('bidding_forms')->onDelete('cascade')->onUpdate('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidding_customer_details');
    }
};
