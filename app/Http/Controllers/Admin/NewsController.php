<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            'image' => move_file($request->image, 'news'),
            'title' => $request->title,
            'content' => $request->get('content')
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        try {
            unlink(config('variables.news.public') . $news->image);
        } catch (Exception $e) {

        }

        $news->image = move_file($request->image, 'news');
        $news->title = $request->title;
        $news->content = $request->get('content');
        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'Berita diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        try {
            unlink(config('variables.news.public') . $news->image);
        } catch (Exception $e) {

        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita dihapus');
    }
}
