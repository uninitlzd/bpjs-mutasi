<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id) {
        $news = News::where('id', '=', $id)->first();
        return view('news-single', compact('news'));
    }
}
