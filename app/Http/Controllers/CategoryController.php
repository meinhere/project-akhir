<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Footer;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $data = [
            'title' => 'JagoKebun . ' . $category->name,
            'articles' => $category->article,
            'newArticles' => Article::latest()->filter(request(['search']))->get(),
            'category' => $category,
            'categories' => Category::whereNotIn('name', [$category->name])->get(),
            'footers' => Footer::all()
        ];
        return view('artikel.kategori', $data);
    }
}
