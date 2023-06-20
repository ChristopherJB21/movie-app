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
        Schema::create('ms_buy_tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('movie_id');
            $table->uuid('cinema_id');
            $table->date('date');
            $table->time('time');
            $table->bigInteger('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_buy_tickets');
    }
};
