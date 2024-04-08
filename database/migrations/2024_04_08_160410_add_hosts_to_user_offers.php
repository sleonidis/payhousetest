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
        Schema::table('user_offers', function (Blueprint $table) {
            $table->json('host');
            $table->unsignedBigInteger('host_count')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_offers', function (Blueprint $table) {
            $table->dropColumn('host');
            $table->dropColumn('host_count');
        });
    }
};
