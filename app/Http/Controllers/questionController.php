<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\question;
use App\answer;
class questionController extends Controller
{
    public function viewInsertQuestion() {
        $lesson = lesson::All();
        return view('them.themnghevietlai',['lesson'=> $lesson]);
    }

    public function hienThiThemTN() {
        $lesson = lesson::All();
        return view('them.themcautracnghiem',['lesson'=> $lesson]);
    }

    public function createLS(Request $request) {
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->type_id = 3;
        $question->lesson_id = $request->lesson;
        $audio = $request->file('audio');
        if($audio->getClientOriginalExtension('audio')== "mp3"){
            $audioName = $audio->getClientOriginalName('audio');
            $audio->move('audio', $audioName); 
            $question->path ="audio/" . $audioName;
        }
        else{
            return redirect('them.themnghevietlai')->with('thongbao','khong phai file audio');
        }
        $question->save();
        return $question;
    }

    public function createTN (Request $request) {
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->type_id = 1;
        $question->lesson_id = $request->lesson;
        $question->vocabularyId = 1;
        $question->save();
        $answerT = new answer;
        $answerT->name = $request->cautraloidung;
        $answerT->description = $request->description;
        $answerT->is_corred = true;
        $answerT->question_id = $question->id;
        $answerT->save();
        $answer1 = new answer;
        $answer1->name = $request->cautraloi1;
        $answer1->description = $request->description;
        $answer1->is_corred = false;
        $answer1->question_id = $question->id;
        $answer1->save();
        $answer2 = new answer;
        $answer2->name = $request->cautraloi2;
        $answer2->description = $request->description;
        $answer2->is_corred = false;
        $answer2->question_id = $question->id;
        $answer2->save();
        $answer3 = new answer;
        $answer3->name = $request->cautraloi2;
        $answer3->description = $request->description;
        $answer3->is_corred = false;
        $answer3->question_id = $question->id;
        $answer3->save();
        // return redirect('admin/hangHoa/them')->with('thongbao','Thêm thành công');
        return $question;
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
