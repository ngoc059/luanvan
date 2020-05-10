<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vocabulary;
use App\TypeVocabulary;
class vocabularyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewVocabulary() {
        $typeVocabulary = TypeVocabulary::all();
        return view('them.themtuvung', ['typeVocabulary' => $typeVocabulary]);
    }
    
    public function checkCorre($answer) {
        if ($answer) {
        } 
        return view('main.main',['listV'=>$autoVocabulary, 'tq'=>'ngoc']);
    }
    public function insert(Request $request) {
        echo $request;
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
}
