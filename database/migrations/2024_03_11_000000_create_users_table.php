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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('lastname')->nullable();
            $table->integer('phonenumber');
            $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate');
            $table->boolean('is_admin')->default(false);
            $table->foreignId('project_id')
            ->constrained()
            ->noUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
