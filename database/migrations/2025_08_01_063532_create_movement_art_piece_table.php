<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movement_art_piece', function (Blueprint $table) {
            $table->foreignId('movement_id')->constrained()->onDelete('cascade');
            $table->foreignId('art_piece_id')->constrained()->onDelete('cascade');
            $table->primary(['movement_id', 'art_piece_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_art_pieces');
    }
};
