<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TimKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'Timovi' => Tim::all(),
        ]);
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
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function show(Tim $tim)
    {
        $showTim = Tim::find($tim);

        return response()->json([
            'Tim' => $showTim,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edit(Tim $tim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tim $tim)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'sef' => 'required|string',
            'email' => 'required|email',
            'sajt' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Validator error: ' => $validator->errors()
            ]);
        }

        $timUpdate = Tim::find($tim)->first();

        $timUpdate->naziv = $request->naziv;
        $timUpdate->sef = $request->sef;
        $timUpdate->email = $request->email;
        $timUpdate->sajt = $request->sajt;

        $timUpdate->save();

        return response()->json([
            'Poruka' => 'Tim je ažuriran',
            'Ažuriran tim' => $timUpdate
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tim $tim)
    {
        $deleteTim = Tim::find($tim)->first();

        $deleteTim->delete();

        return response()->json([
            'Poruka' => 'Tim  je obrisan!',
            'Obrisani tim' => $deleteTim
        ]);
    }
}
