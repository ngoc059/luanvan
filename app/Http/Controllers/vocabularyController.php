<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vocabulary;
class vocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFour()
    {
        $NCC = vocabulary::all()->take(4);
        $autoVocabulary = vocabulary::where('type_id', 2)
            ->take(4)
            ->get();
        return view('main.main',['listV'=>$autoVocabulary]);
    }

    // public function getFour($typeId) {
    //     $autoVocabulary = vocabulary::where('type_id', $typeId)
    //            ->take(4)
    //            ->get();
    //     return view('learn.learnbytype',['listV'=>$autoVocabulary]);
    // }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
