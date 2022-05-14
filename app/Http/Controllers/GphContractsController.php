<?php

namespace App\Http\Controllers;

use App\Models\GphContracts;
use Illuminate\Http\Request;

class GphContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gph = GphContracts::all();
        return view('gph', ['contracts' => $gph]);
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
     * @param  \App\Models\GphContracts  $gphContracts
     * @return \Illuminate\Http\Response
     */
    public function show(GphContracts $gphContracts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GphContracts  $gphContracts
     * @return \Illuminate\Http\Response
     */
    public function edit(GphContracts $gphContracts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GphContracts  $gphContracts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GphContracts $gphContracts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GphContracts  $gphContracts
     * @return \Illuminate\Http\Response
     */
    public function destroy(GphContracts $gphContracts)
    {
        //
    }
}
