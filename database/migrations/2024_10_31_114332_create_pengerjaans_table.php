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
        Schema::create('pengerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_layanan')->constrained('layanans')->cascadeOnDelete();
            $table->string('pengerjaan');
            $table->integer('tarif');
            // $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengerjaans');
    }
};