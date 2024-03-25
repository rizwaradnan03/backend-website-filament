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
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');

            $table->foreignId('loan_id')->constrained('loans')->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('phone');
            $table->text('amount');
            $table->string('jangka_waktu');
            $table->string('no_identitas');
            $table->string('email');
            $table->string('kode_pengajuan');
            $table->enum('status', ['pending', 'processing', 'accepted'])->default('pending');
            $table->string('ibu_kandung');
            $table->string('ktp_upload');
            $table->string('ktp_selfie');
            $table->string('employment');
            $table->string('salary');
            $table->string('province');
            $table->string('city');
            $table->string('subdistrict');
            $table->string('ward');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
