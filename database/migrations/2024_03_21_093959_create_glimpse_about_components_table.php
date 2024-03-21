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
        Schema::create('glimpse_about_component', function (Blueprint $table) {
            $table->id();

            $table->foreignId('company_id')->constrained('company')->onDelete('cascade');

            $table->foreignId('glimpse_about')->constrained('glimpse_about')->onDelete('cascade');

            $table->string('icon');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('glimpse_about_components');
    }
};
