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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->constrained('car_models')->restrictOnDelete();
            $table->string('vehicle_identification_number')->unique();
            $table->foreignId('car_type_id')->constrained('car_types')->restrictOnDelete();
            $table->decimal('price');
            $table->foreignId('fuel_type_id')->constrained('fuel_types')->restrictOnDelete();
            $table->foreignId('transmission_type_id')->constrained('transmission_types')->restrictOnDelete();
            $table->foreignId('car_seater_id')->constrained('car_seaters')->restrictOnDelete();
            $table->integer('safety_rating');
            $table->decimal('tax');
            $table->decimal('mileage');
            $table->decimal('discount')->nullable();
            $table->integer('like_count')->default(0);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
