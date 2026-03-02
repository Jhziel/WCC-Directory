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
        Schema::create('waypoints', function (Blueprint $table) {
            $table->id();
            $table->integer('floor'); // Floor number
            $table->decimal('x', 8, 2); // X coordinate
            $table->decimal('y', 8, 2); // Y coordinate
            $table->string('type')->default('corridor'); // waypoint type (corridor, door, stairs, elevator)
            $table->timestamps();
            
            $table->index('floor');
        });
        
        // Connection table for waypoint neighbors (graph edges)
        Schema::create('waypoint_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_waypoint_id')->constrained('waypoints')->onDelete('cascade');
            $table->foreignId('to_waypoint_id')->constrained('waypoints')->onDelete('cascade');
            $table->decimal('distance', 8, 2)->nullable(); // Pre-calculated distance
            $table->timestamps();
            
            $table->index(['from_waypoint_id', 'to_waypoint_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waypoint_connections');
        Schema::dropIfExists('waypoints');
    }
};
