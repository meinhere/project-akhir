<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function plant()
    {
        return $this->haveMany(Plant::class);
    }
}
