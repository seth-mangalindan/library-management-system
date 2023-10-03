<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('authors');
            $table->integer('average_rating');
            $table->integer('isbn');
            $table->integer('isbn13');
            $table->string('language_code');
            $table->integer('num_pages');
            $table->integer('ratings_count');
            $table->integer('text_reviews_count');
            $table->dateTime('publication_date');
            $table->string('publisher');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};