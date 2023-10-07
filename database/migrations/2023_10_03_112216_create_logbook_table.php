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
        Schema::create('logbook', function (Blueprint $table) {
            $table->id();
            $table->integer('serial_id');

            $table->foreignId('item_id')->constrained(
                table: 'inventory',
                indexName: 'item_id'
            );

            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'user_id'
            );

            $table->dateTime('borrow_date');
            $table->dateTime('return_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbook');
    }
};