<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
        'floor',
        'type',
        'description',
        'svg_id',
        'center_x',
        'center_y',
        'is_searchable'
    ];
    
    protected $casts = [
        'floor' => 'integer',
        'center_x' => 'float',
        'center_y' => 'float',
        'is_searchable' => 'boolean'
    ];
    
    // Scope for searching rooms
    public function scopeSearch($query, $term)
    {
        return $query->where('is_searchable', true)
                    ->where(function($q) use ($term) {
                        $q->where('name', 'LIKE', "%{$term}%")
                          ->orWhere('description', 'LIKE', "%{$term}%")
                          ->orWhere('type', 'LIKE', "%{$term}%");
                    });
    }
    
    // Scope for floor filtering
    public function scopeOnFloor($query, $floor)
    {
        return $query->where('floor', $floor);
    }
}
