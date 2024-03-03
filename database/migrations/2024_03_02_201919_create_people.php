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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('etternavn',500)->nullable();
            $table->string('fornavn',400)->nullable();
            $table->string('dato_dod',300)->nullable();
            $table->string('dato_fodt',300)->nullable();
            $table->string('fodested',500)->nullable();
            $table->string('navn_fodt',400)->nullable();
            $table->string('parent1',600)->nullable();
            $table->string('parent2',600)->nullable();
            $table->string('sted_dod',400)->nullable();
            $table->string('barn',700)->nullable();
            $table->string('er_gift_med',500)->nullable();
            $table->string('var_gift_med',500)->nullable();
            $table->string('created_by',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
