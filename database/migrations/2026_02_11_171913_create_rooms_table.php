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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Room name (e.g., "EXIT", "Computer Lab 1")
            $table->integer('floor'); // Floor number (1-8)
            $table->string('type')->nullable(); // Room type (exit, lab, classroom, office, etc)
            $table->text('description')->nullable(); // Room description
            $table->string('svg_id')->nullable(); // ID/reference to SVG element
            $table->decimal('center_x', 8, 2); // Center X coordinate for pathfinding
            $table->decimal('center_y', 8, 2); // Center Y coordinate for pathfinding
            $table->boolean('is_searchable')->default(true); // Can be searched
            $table->timestamps();
            
            // Indexes for faster searches
            $table->index('floor');
            $table->index('type');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
