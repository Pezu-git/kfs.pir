<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use Illuminate\Http\Request;

class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contracts::orderBy('beginning')->get();
        return view('contracts', ['contracts' => $contracts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $req = $request->all();
        Contracts::create($req);
        return redirect()->route('contracts');
    }

    public function search(Request $request)
    {
        $arr = [];
        $f = Contracts::all();
        for ($i = 0; $i < count($f); $i++) {
            $employer = mb_strtolower($f[$i]['employer']);
            if (strpos($employer, mb_strtolower($request->search)) !== false) {
                $arr[] = $f[$i];
            }
        }
        if ($arr !== []) {
            sort($arr);
            // return $arr;
            return view('contracts', ['contracts' => $arr]);
        }
        return redirect()->route('contracts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contracts  $contracts
     * @return \Illuminate\Http\Response
     */
    public function show(Contracts $contracts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contracts  $contracts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contracts $contracts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contracts  $contracts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contracts $contracts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contracts  $contracts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contracts $contracts)
    {
        //
    }
}
