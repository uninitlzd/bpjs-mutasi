<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PromotionalImages;
use Exception;
use Illuminate\Http\Request;

class PromotionalImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = PromotionalImages::get();
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PromotionalImages::create([
            'image' => move_file($request->image, 'promotional_images')
        ]);

        return redirect()->route('admin.promotional_images.index')->with('success', 'Gambar ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PromotionalImages $promotionalImages
     * @return \Illuminate\Http\Response
     */
    public function show(PromotionalImages $promotionalImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PromotionalImages $promotionalImages
     * @return \Illuminate\Http\Response
     */
    public function edit(PromotionalImages $promotionalImages)
    {
        return view('admin.images.edit', compact('promotionalImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\PromotionalImages $promotionalImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PromotionalImages $promotionalImages)
    {
        try {
            unlink(config('variables.promotional_images.public') . $promotionalImages->image);
        } catch (Exception $e) {

        }

        $promotionalImages->image = move_file($request->image, 'promotional_images');
        $promotionalImages->save();

        return redirect()->route('admin.promotional_images.index')->with('success', 'Gambar diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PromotionalImages $promotionalImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(PromotionalImages $promotionalImages)
    {
        try {
            unlink(config('variables.promotional_images.public') . $promotionalImages->image);
        } catch (Exception $e) {

        }

        $promotionalImages->delete();

        return redirect()->route('admin.promotional_images.index')->with('success', 'Gambar dihapus');
    }
}
