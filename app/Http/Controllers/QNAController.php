<?php

namespace App\Http\Controllers;

use App\QNA;
use Illuminate\Http\Request;

class QNAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qna = QNA::get();

        return view('admin.qna.index', compact('qna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.qna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        QNA::create($request->except('_token'));

        return redirect()->route('admin.qna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QNA  $qNA
     * @return \Illuminate\Http\Response
     */
    public function show(QNA $qNA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QNA  $qNA
     * @return \Illuminate\Http\Response
     */
    public function edit(QNA $qna)
    {
        return view('admin.qna.edit', compact('qna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QNA  $qNA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QNA $qna)
    {
        $qna->update($request->except('_token'));
        return redirect()->route('admin.qna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QNA  $qNA
     * @return \Illuminate\Http\Response
     */
    public function destroy(QNA $qna)
    {
        $qna->delete();
        return redirect()->route('admin.qna.index');
    }
}
