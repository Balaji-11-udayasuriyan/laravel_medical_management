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
        Schema::create('prescription_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prescription_id');  // Reference to the prescription
            $table->unsignedBigInteger('pharmacist_id');  // Reference to the pharmacist reviewing
            $table->text('review_notes')->nullable();  // Pharmacist's notes on the prescription
            $table->enum('approval_status', ['approved', 'rejected'])->default('approved');  // Status of approval
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescription_reviews');
    }
};
