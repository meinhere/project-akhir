<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Tool;
use App\Models\PlantTool;
use App\Models\Price;
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
            'plants_tools' => PlantTool::all(),
            'footers' => Footer::all(),
        ];

        return view('tanaman.alat', $data);
    }

    public function harga()
    {
        $data = [
            'title' => 'JagoKebun . Harga Pasaran',
            'prices' => Price::all(),
            'footers' => Footer::all(),
        ];

        return view('tanaman.harga', $data);
    }
}
