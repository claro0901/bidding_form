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
        Schema::create('bidding_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidding_form_id');
            $table->string('added_items')->nullable;
            // $table->string('item_status')->nullable;
            // $table->string('other_companies_book')->nullable;
            $table->timestamps();
            $table->foreign('bidding_form_id')->references('id')->on('bidding_forms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidding_items');
    }
};
