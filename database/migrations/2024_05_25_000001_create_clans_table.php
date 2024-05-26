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
        Schema::create('clans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('title', 64);
            $table->string('about', 350)->nullable();
            $table->text('description')->nullable();
            $table->foreignId('leader_id')->unique()->constrained('players');
            $table->foreignId('negotiator_id')->unique()->constrained('players');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('players', function (Blueprint $table) {
            $table->foreignId('clan_id')->after('last_login')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign('players_clan_id_foreign');
        });
        Schema::dropColumns('players', 'clan_id');
        Schema::drop('clans');
    }
};
