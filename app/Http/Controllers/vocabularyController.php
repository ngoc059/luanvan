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

    public function insertType(Request $request) {
        $typeVocabulary = new TypeVocabulary;
        $typeVocabulary->name = $request->name;
        $typeVocabulary->save();
        return redirect('type/view-type')->with('thongbao','thêm thành công');
    }
    
    public function checkCorre($answer) {
        if ($answer) {
        } 
        return view('main.main',['listV'=>$autoVocabulary, 'tq'=>'ngoc']);
    }

    public function insert(Request $request) {
        
        $vocabulary = new vocabulary;
        $vocabulary->type_vocabulary_id = $request->type_id;
        $vocabulary->vietnamese = $request->tv;
        $vocabulary->chinese = $request->tq;
        $vocabulary->pinyin = $request->cp;
        $vocabulary->vdTQ = $request->vdtq;
        $vocabulary->vdTV = $request->vdtv;
        $file = $request->file('hinhanh');
        
        if($file->getClientOriginalExtension('myFile') == "jpg"||$file->getClientOriginalExtension('myFile') == "png" ){
            $fileName = $file->getClientOriginalName('myFile');
            $file->move('images', $fileName); 
            $vocabulary->img ="images/" . $fileName;
            }
            else{
                return redirect('/vocabulary/view-vocabulary')->with('thongbao','khong phai file anh');
        }
        $vocabulary->save();
        return redirect('/vocabulary/view-vocabulary')->with('thongbao','Thêm thành công');
    }

    

    public function list(){
        $vocabulary = vocabulary::all();
        return view('list.danhsachtuvung', compact('vocabulary'));
    }

    public function deleteTypeVocabulary($id){
        type_vobucalary::destroy($id);
        return redirect('/vocabulary/list');
    }

    public function listDraw() {
        $listDraw = [];
        for ($i=0;$i < 5; $i++) { 
            $img['imgDraw'] = "image/imgdraw/draw". ($i + 1).".jpg";
            array_push($listDraw, $img);
        }
        // Array($listDraw);
        // // return $listDraw;
        return view('learn.listDraw', compact('listDraw'));
    }
}
