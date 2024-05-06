<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TypeDay;
use Illuminate\Http\Request;

class TypeDayController extends Controller
{
    public $successStatus = 200;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTypeDay()
    {
        $typeDay = TypeDay::all();
        return $typeDay;
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
     * @param  \App\Models\TypeDay  $typeDay
     * @return \Illuminate\Http\Response
     */
    public function show(TypeDay $typeDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeDay  $typeDay
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeDay $typeDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeDay  $typeDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeDay $typeDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeDay  $typeDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeDay $typeDay)
    {
        //
    }
}
