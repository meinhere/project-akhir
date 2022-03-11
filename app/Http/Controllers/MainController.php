<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Models\Article;
use App\Models\Service;
use App\Models\Footer;
use App\Models\Plant;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "JagoKebun . Beranda",
            'articles' => Article::all(),
            'services' => Service::all(),
            'footers' => Footer::all(),
        ];

        return view('home', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'JagoKebun . Dashboard',
        ];

        return view('dashboard.index', $data);
    }

    public function riwayat()
    {
        $data = [
            'title' => 'JagoKebun . Riwayat'
        ];

        return view('riwayat', $data);
    }

    public function show(Service $service)
    {
        $data = [
            'title' => 'JagoKebun . ' . $service->name,
            'footers' => Footer::all(),
            'service' => $service
        ];

        return view('show', $data);
    }

    public function footer(Footer $footer)
    {
        $data = [
            'title' => 'JagoKebun . ' . $footer->title,
            'footers' => Footer::all(),
            'footer' => $footer
        ];

        return view('footer', $data);
    }
}
