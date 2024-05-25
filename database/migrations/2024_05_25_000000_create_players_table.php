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
        Schema::create('players', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->enum('race', ['human', 'elf', 'hobbit', 'dwarf', 'orc', 'shadow']);
            $table->integer('experience')->default(0);
            $table->timestamp('last_login')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
