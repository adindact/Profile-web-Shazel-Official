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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // Primary key auto-increment
            $table->bigInteger('user_id')->unsigned(); // Foreign key to the users table
            $table->bigInteger('product_id')->unsigned(); // Foreign key to the products table
            $table->text('review_text'); // Review text
            $table->integer('rating')->default(0); // Rating (default value 0)
            $table->string('image')->nullable(); // Optional image URL
            $table->string('video')->nullable(); // Optional video URL
            $table->timestamps(); // Created_at and updated_at timestamps

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
