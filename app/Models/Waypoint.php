<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Waypoint extends Model
{
    protected $fillable = ['floor', 'x', 'y', 'type'];
    
    protected $casts = [
        'floor' => 'integer',
        'x' => 'float',
        'y' => 'float'
    ];
    
    // Relationship to connected waypoints
    public function connections()
    {
        return $this->belongsToMany(Waypoint::class, 'waypoint_connections', 'from_waypoint_id', 'to_waypoint_id')
                    ->withPivot('distance')
                    ->withTimestamps();
    }
}
