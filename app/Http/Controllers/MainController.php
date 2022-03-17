<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Models\Article;
use App\Models\Service;
use App\Models\Category;
use App\Models\User;
use App\Models\Plant;
use App\Models\Footer;

class MainController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "JagoKebun . Beranda",
            'services' => Service::all(),
            'footers' => Footer::all(),
        ];
        return view('home', $data);
    }

    public function fetchNews()
    {
        $articles = Article::take(7)->get();
        return response()->json([
            'news' => $articles
        ]);
    }

    public function fetchPopulars()
    {
        $articles = Article::all();
        $articles = $articles->sortBy([
            ['read_count', 'desc'],
            ['name', 'asc'],
        ])->take(7);
        return response()->json([
            'populars' => $articles
        ]);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'JagoKebun . Dashboard',
            'users' => User::all(),
            'services' => Service::all(),
            'categories' => Category::all(),
            'plants' => Plant::all(),
            'articles' => Article::where('user_id', auth()->user()->id),
        ];

        return view('dashboard.index', $data);
    }

    public function riwayat()
    {
        $data = [
            'title' => 'JagoKebun . Riwayat',
        ];

        return view('riwayat', $data);
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
