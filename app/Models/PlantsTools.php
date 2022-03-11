<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantsTools extends Model
{
    use HasFactory;

    protected $table = 'plants_tools';
    protected $guarded = ['id'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }
}
