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
        Schema::table('industries', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_verify')->default(false);
            $table->string('mou')->nullable();
            $table->date('date_expired')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('industries', function (Blueprint $table) {
            $table->dropColumn('is_verify');
            $table->dropColumn('mou');
            $table->dropColumn('date_expired');
        });
    }
};
