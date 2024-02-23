<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bidding_forms', function (Blueprint $table) {
            $table->id();
            $table->string('solicitation_no');
            $table->string('project_name');
            $table->string('project_ref_no');
            $table->string('bid_mode');   
            $table->string('date_posted');   
            $table->string('bid_amount');   
            $table->string('day_delivery_no');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidding_forms');
    }
};
