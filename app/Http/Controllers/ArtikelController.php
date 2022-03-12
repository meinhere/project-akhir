<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Footer;

class ArtikelController extends Controller
{
  public function index()
  {
    $data = [
      "title" => "JagoKebun . Artikel",
      'articles' => Article::latest()->filter(request(['search']))->paginate(14)->withQueryString(),
      'newArticle' => Article::latest()->take(1)->get(),
      'footers' => Footer::all()
    ];
    return view('artikel.index', $data);
  }

  public function show(Article $article)
  {
    $data = [
      'title' => 'JagoKebun . Artikel : ' . $article->title,
      'article' => $article,
      'categories' => Category::all(),
      'articles' => Article::where('category_id', $article->category->id)->filter(request(['search']))->get(),
      'footers' => Footer::all()
    ];
    return view('artikel.detail', $data);
  }
}
