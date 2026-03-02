<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Waypoint;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Search rooms
    public function search(Request $request)
    {
        $query = Room::query()->where('is_searchable', true);
        
        if ($request->has('q') && $request->q) {
            $query->search($request->q);
        }
        
        if ($request->has('floor')) {
            $query->onFloor($request->floor);
        }
        
        if ($request->has('type')) {
            $query->where('type', $request->type);
        }
        
        $rooms = $query->orderBy('floor')->orderBy('name')->get();
        
        return response()->json($rooms);
    }
    
    // Get all rooms for a specific floor
    public function byFloor($floor)
    {
        $rooms = Room::onFloor($floor)->get();
        return response()->json($rooms);
    }
    
    // Get room details
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return response()->json($room);
    }
    
    // Simple pathfinding using A* algorithm
    public function findPath(Request $request)
    {
        $request->validate([
            'from_room_id' => 'required|exists:rooms,id',
            'to_room_id' => 'required|exists:rooms,id'
        ]);
        
        $fromRoom = Room::find($request->from_room_id);
        $toRoom = Room::find($request->to_room_id);
        
        // If same floor, draw direct line (simplified)
        if ($fromRoom->floor === $toRoom->floor) {
            return response()->json([
                'path' => [
                    ['x' => $fromRoom->center_x, 'y' => $fromRoom->center_y],
                    ['x' => $toRoom->center_x, 'y' => $toRoom->center_y]
                ],
                'floor' => $fromRoom->floor,
                'multi_floor' => false
            ]);
        }
        
        // Multi-floor navigation (to be enhanced later)
        return response()->json([
            'path' => [],
            'multi_floor' => true,
            'message' => 'Multi-floor navigation: Go to stairs/elevator'
        ]);
    }
    
    // Get all room types
    public function types()
    {
        $types = Room::select('type')
                    ->distinct()
                    ->whereNotNull('type')
                    ->pluck('type');
        
        return response()->json($types);
    }
}
