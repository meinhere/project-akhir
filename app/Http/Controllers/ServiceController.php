<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Service;

class ServiceController extends Controller
{
    public function langkahAwal()
    {
        $data = [
            'title' => 'JagoKebun . Langkah Awal',
            'services' => Service::where('jenis_service', 2)->get(),
            'footers' => Footer::all()
        ];

        return view('service.langkah-awal', $data);
    }

    public function caraPengobatan()
    {
        $data = [
            'title' => 'JagoKebun . Cara Pengobatan',
            'services' => Service::where('jenis_service', 2)->get(),
            'footers' => Footer::all()
        ];

        return view('service.cara-pengobatan', $data);
    }
}
