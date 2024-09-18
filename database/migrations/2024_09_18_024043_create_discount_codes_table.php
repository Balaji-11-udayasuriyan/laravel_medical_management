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
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->date('valid_from');
            $table->date('valid_until');
            $table->integer('usage_limit')->default(1); // Number of times it can be used
            $table->integer('times_used')->default(0);
            $table->string('applicable_for')->nullable(); // Medicines, Health Products, etc.
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_codes');
    }
};
