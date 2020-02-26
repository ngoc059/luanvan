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
        $autoVocabulary = vocabulary::where('type_id', 2)
            ->take(4)
            ->get();
        return view('main.main',['listV'=>$autoVocabulary]);
    }
    
    public function insert(Request $request) {

        $vocabulary = new vocabulary;
        $vocabulary->type_id = $request->type_id;
        $vocabulary->vietnamese = $request->TV;
        $vocabulary->chinese = $request->TQ;
        $vocabulary->VDTQ = $request->VDTQ;
        $vocabulary->VDTV = $request->VDTV;
        $file = $request->file('hinhanh');
        if($file->getClientOriginalExtension('myFile')== "jpg"||$file->getClientOriginalExtension('myFile')== "png" ){
            $fileName = $file->getClientOriginalName('myFile');
            echo $fileName;
            $file->move('img', $fileName); 
            $vocabulary->img = $fileName;
            }
            else{
                return redirect('admin/hangHoa/them')->with('thongbao','khong phai file anh');
            }
        $audio = $request->file('audio');
        if($file->getClientOriginalExtension('audio')== "mp3"){
            $audioName = $file->getClientOriginalName('audio');
            echo $fileName;
            $file->move('audio', $audioName); 
            $vocabulary->audio = $audioName;
            }
            else{
                return redirect('admin/hangHoa/them')->with('thongbao','khong phai file audio');
            }
        $vocabulary->save();
        // return redirect('admin/hangHoa/them')->with('thongbao','Thêm thành công');
        return $vocabulary;
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
