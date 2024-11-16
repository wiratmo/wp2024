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
        Schema::table(
            'industries',
            function (Blueprint $table) {
                $table->foreignId('user_id')->constrained()->nullable();
                $table->string('description')->nullable();
                $table->geometry('location', subtype: 'point')->nullable();
                $table->boolean('is_verify')->nullable();
                $table->unsignedBigInteger('verificator_id')->nullable();
                $table->string('mou')->nullable();
                $table->date('mou_expired')->nullable();

                $table->foreign('verificator_id')->references('id')->on('users')->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
