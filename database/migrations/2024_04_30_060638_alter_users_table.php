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
        //Creation of new colum in the users table
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->default(1)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //add it into the users table
        Schema::table('users', function (Blueprint $table) {
            $table->dropColum('role');
        });
    }
};
