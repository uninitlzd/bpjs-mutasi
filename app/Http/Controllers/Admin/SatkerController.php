<?php

namespace App\Http\Controllers\Admin;

use App\DepartemenSatker;
use App\Http\Requests\FeedbackStore;
use App\Http\Requests\SatkerStore;
use App\PromotionalImages;
use App\Satker;
use App\StatusSatker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satker = Satker::get();
        return view('admin.satker.index', compact('satker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = DepartemenSatker::pluck('nama', 'id');
        $status = StatusSatker::pluck('deskripsi', 'id');
        return view('admin.satker.create', compact('departemen', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SatkerStore $request)
    {
        Satker::create($request->except('_token'));

        return redirect()->route('admin.satker.index')->with('success', 'Satker ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satker  $satker
     * @return \Illuminate\Http\Response
     */
    public function show(Satker $satker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satker  $satker
     * @return \Illuminate\Http\Response
     */
    public function edit(Satker $satker)
    {
        $departemen = DepartemenSatker::pluck('nama', 'id');
        $status = StatusSatker::pluck('deskripsi', 'id');
        return view('admin.satker.edit', compact('satker', 'departemen', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satker  $satker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Satker $satker)
    {
        $satker->update($request->except('_token'));

        return redirect()->route('admin.satker.index')->with('success', 'Data Satker berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satker  $satker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satker $satker)
    {
        $satker->delete();

        return redirect()->route('admin.satker.index')->with('success', 'Data Satker berhasil dihapus');
    }
}
