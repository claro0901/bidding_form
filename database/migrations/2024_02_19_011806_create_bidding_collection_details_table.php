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
        Schema::create('bidding_collection_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidding_form_id');
            $table->string('collection_status');
            $table->string('cr_no')->nullable();
            $table->date('date_collected')->nullable();
            $table->string('bank_name');
            $table->date('deposit_date');
            $table->timestamps();
            $table->foreign('bidding_form_id')->references('id')->on('bidding_forms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidding_collection_details');
    }
};
