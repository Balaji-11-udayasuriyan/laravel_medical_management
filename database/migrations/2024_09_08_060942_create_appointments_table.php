<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\AppointmentStatus;
use App\Enums\ConsultationType;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('appointment_time');
            $table->string('status')->default(AppointmentStatus::Pending);
            $table->string('consultation_type')->default(ConsultationType::In_Person); 
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
