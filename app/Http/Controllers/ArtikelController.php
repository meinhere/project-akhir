<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Footer;
use App\Models\Comment;

class ArtikelController extends Controller
{
  public function index()
  {
    $data = [
      "title" => "JagoKebun . Artikel",
      'articles' => Article::latest()->filter(request(['search']))->paginate(8)->withQueryString(),
      'newArticle' => Article::latest()->take(1)->get(),
      'popularArticles' => Article::all(),
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
      'comments' => Comment::where('article_id', $article->id)->get(),
      'footers' => Footer::all()
    ];

    $read_count = $article->read_count + 1;
    Article::where('id', $article->id)->update(['read_count' => $read_count]);

    return view('artikel.detail', $data);
  }

  public function comment(Request $request)
  {
    $validatedData = $request->validate([
      'comment' => 'required|max:255',
    ]);

    $validatedData['user_id'] = $request->user_id;
    $validatedData['article_id'] = $request->article_id;

    Comment::create($validatedData);

    return redirect('/artikel/' . $request->slug);
  }
}
