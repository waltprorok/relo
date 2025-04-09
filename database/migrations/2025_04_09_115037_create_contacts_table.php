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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->enum('status', ['own', 'rent', 'other']);
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('current_zip_code', 12)->nullable();
            $table->string('moving_to_city', 50)->nullable();
            $table->text('message')->nullable();
            $table->tinyInteger('replied')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
