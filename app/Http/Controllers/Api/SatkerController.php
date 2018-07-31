<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Satker;
use Illuminate\Http\Request;

class SatkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Satker::where('nama','LIKE','%'.$request->q.'%')->paginate(10);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satker  $satker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satker $satker)
    {
        //
    }
}
