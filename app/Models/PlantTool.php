<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantTool extends Model
{
    use HasFactory;

    protected $table = 'plant_tool';
    protected $guarded = ['id'];
    protected $with = ['plant', 'tool'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }
}
