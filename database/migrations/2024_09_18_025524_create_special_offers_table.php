<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\SpecialOfferServiceType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('special_offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('service_type')->default(SpecialOfferServiceType::Tests); //e.g., Tests, Consultations, etc.
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->date('valid_from');
            $table->date('valid_until');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_offers');
    }
};
