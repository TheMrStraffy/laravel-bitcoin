<?php

namespace App\Http\Controllers;

use App\Models\Bitcoin;
use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bitcoins = Bitcoin::paginate(20);
        return view('bitcoin.index', compact('bitcoins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bitcoin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_bitcoin = new Bitcoin();
        $new_bitcoin->fill($form_data);
        $new_bitcoin->save();
        return redirect()->route('bitcoins.show', $new_bitcoin);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bitcoin  $bitcoin
     * @return \Illuminate\Http\Response
     */
    public function show(Bitcoin $bitcoin)
    {
        return view('bitcoin.show', compact('bitcoin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bitcoin  $bitcoin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bitcoin $bitcoin)
    {
        return view('bitcoin.edit', compact('bitcoin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bitcoin  $bitcoin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bitcoin $bitcoin)
    {
        $form_data = $request->all();

        $bitcoin->update($form_data);
        return redirect()->route('bitcoins.show', $bitcoin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bitcoin  $bitcoin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bitcoin $bitcoin)
    {
        //
    }
}
