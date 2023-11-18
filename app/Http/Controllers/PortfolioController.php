<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portfolio')->with('portfolioItems',PortfolioItem::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'item_url' => 'required',
            'img' => 'required|mimes:jpg,png',
        ]);

        $newImgName = uniqid() . '-' . $request->title . '.' . $request->img->extension();
        $request->img->move(public_path('images'),$newImgName);

        PortfolioItem::create([
            'title'         => $request->title,
            'item_url'    => $request->item_url,
            'img_path'      => $newImgName
        ]);

        return redirect('/portfolio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
