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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained('company')->onDelete('cascade');

            $table->string('product');
            $table->string('slug');
            $table->string('suku_bunga');
            $table->string('image');
            $table->text('content');
            $table->text('terms_and_conditions');

            // $table->string('first_name');
            // $table->string('last_name');
            // $table->text('address');
            // $table->string('phone');
            // $table->text('amount');
            // $table->string('no_identitas');
            // $table->string('email');
            // $table->string('kode_pengajuan');
            // $table->enum('status', ['pending', 'processing', 'accepted'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
