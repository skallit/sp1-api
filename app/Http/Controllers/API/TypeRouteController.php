<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TypeRoute;
use Illuminate\Http\Request;

class TypeRouteController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTypeRoute()
    {
        $typeRoute = TypeRoute::all();
        return $typeRoute;
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
     * @param  \App\Models\TypeRoute  $typeRoute
     * @return \Illuminate\Http\Response
     */
    public function show(TypeRoute $typeRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeRoute  $typeRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeRoute $typeRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeRoute  $typeRoute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeRoute $typeRoute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeRoute  $typeRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeRoute $typeRoute)
    {
        //
    }
}
