<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['plant_category'];

    public function plant_category()
    {
        return $this->belongsTo(PlantCategory::class);
    }

    public function tool()
    {
        return $this->belongsToMany(Tool::class);
    }
}
