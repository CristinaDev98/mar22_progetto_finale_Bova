<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use Illuminate\Http\Request;

class NftController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Nft::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nfts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nft = new Nft();
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'floor_price' => 'required',
        ]);
        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('image/img_nft'), $name);
            $nft->image = $name;
        }
        $nft->name = $request->name;
        $nft->floor_price = $request->floor_price;
        $nft->save();
        return ['alert' => 'Nft created successfully.'];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(Nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(Nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nft $nft)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'floor_price' => 'required',
        ]);
        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('image/img_nft'), $name);
            $nft->image = $name;
        }
        $nft->name = $request->name;
        $nft->floor_price = $request->floor_price;
        $nft->save();
        return ['alert' => 'Nft updated successfully.'];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        $nft = Nft::find($nft->id);
        if (!$nft) {
            return ['error' => 'Nft is not present'];
        }

        $nft->delete();
        return ['alert' => 'Nft deleted successfully'];
    }
}
