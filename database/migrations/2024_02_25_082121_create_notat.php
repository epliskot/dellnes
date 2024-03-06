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
        Schema::create('notat', function (Blueprint $table) {
            $table->id();
            $table->string('person',200);
            $table->string('tag',300);
            $table->string('created_by',200);
            $table->text('notat');
            $table->string('bilder',5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notat');
    }
};
