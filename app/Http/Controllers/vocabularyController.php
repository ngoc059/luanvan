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
        $vocabulary->vietnamese = $request->tv;
        $vocabulary->chinese = $request->tq;
        $vocabulary->vdTQ = $request->vdtq;
        $vocabulary->vdTV = $request->vdtv;
        $file = $request->file('hinhanh');
        echo $file;
        if($file->getClientOriginalExtension('myFile')== "jpg"||$file->getClientOriginalExtension('myFile')== "png" ){
            $fileName = $file->getClientOriginalName('myFile');
            echo $fileName;
            $file->move('img', $fileName); 
            $vocabulary->img = $fileName;
            }
            else{
                return redirect('admin/vocabulary/them')->with('thongbao','khong phai file anh');
        }
        $vocabulary->save();
        // return redirect('admin/hangHoa/them')->with('thongbao','Thêm thành công');
        return $vocabulary;
    }
    public function list(){
        $vocabulary = vocabulary::all();
        return view('list.danhsachloaituvung', compact('vocabulary'));
    }
}
