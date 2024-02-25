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
        Schema::create('table_image', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('file_path',300);
            $table->string('uploaded_by',100);
            $table->text('description');
            $table->string('name',100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_image');
    }
};