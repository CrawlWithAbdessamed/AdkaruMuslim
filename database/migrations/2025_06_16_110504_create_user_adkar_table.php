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
        Schema::create('user_adkar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('adkar_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('adkar_id')->references('id')->on('adkar')->onDelete('cascade');;

            // $table->foreignId('user_id')->constrained();    keep on mind
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_adkar');
    }
};
