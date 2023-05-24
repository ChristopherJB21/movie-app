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
        if (Schema::hasTable('ms_users') && Schema::hasTable('lt_roles')) {
            Schema::table('ms_users', function (Blueprint $table) {
                $table->unsignedBigInteger('role_id')->after('phone_number');
             
                $table->foreign('role_id')->references('id')->on('lt_roles');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
