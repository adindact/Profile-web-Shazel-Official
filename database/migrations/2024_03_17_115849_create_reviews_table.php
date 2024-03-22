<?php

// database/migrations/create_reviews_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('product_id');
            $table->text('review_text');
            $table->integer('rating')->default(0);
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
