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
        Schema::create('health_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('health_product_category_id'); 
            $table->unsignedBigInteger('health_product_sub_category_id');  
            $table->string('name');  
            $table->string('description')->nullable(); 
            $table->string('image_path')->nullable();
            $table->decimal('price', 8, 2);  
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_products');
    }
};
