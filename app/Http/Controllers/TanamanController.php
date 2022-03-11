<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\Tool;
use App\Models\PlantsTools;
use App\Models\Footer;

class TanamanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'JagoKebun . Jenis Tanaman',
            'plants' => Plant::all(),
            'footers' => Footer::all(),
        ];

        return view('tanaman.index', $data);
    }

    public function alat()
    {
        $data = [
            'title' => 'JagoKebun . Alat Perkebunan',
            'tools' => Tool::all(),
            'plants_tools' => PlantsTools::all(),
            'footers' => Footer::all(),
        ];

        return view('tanaman.alat', $data);
    }
}