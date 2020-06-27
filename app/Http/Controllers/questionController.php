<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
session_start();
use Session;
use App\lesson;
use App\question;
use App\answer;
use App\theme;
use App\vocabulary;
class questionController extends Controller
{
    public function viewInsertQuestion() {
        $lesson = $_SESSION['lessonInsert'];
        return view('them.themnghevietlai',['lesson'=> $lesson]);
    }

    public function hienThiThemTN() {
        $lesson = $_SESSION['lessonInsert'];
        return view('them.themcautracnghiem',['lesson'=> $lesson]);
    }

    public function hienThiThemIMG() {
        $lesson = $_SESSION['lessonInsert'];
        $vocabulary = vocabulary::All();
        return view('them.themhoctheohinhanh',['lesson'=> $lesson, 'vocabulary' => $vocabulary]);
    }

    public function viewInsert($id) {
        $lesson = lesson::Find($id);
        $_SESSION['lessonInsert'] = $lesson;
        return view('them.themnghevietlai',['lesson'=> $lesson]);
    }

    public function viewRepeat() {
        $lesson = $_SESSION['lessonInsert'];
        return view('them.themcaunghelaplai',['lesson'=> $lesson]);
    }

    public function createLS(Request $request) {
        $lesson = $_SESSION['lessonInsert'];
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = 0;
        $question->type_id = 3;
        $question->lesson_id = $lesson->id;
        $question->question = $request->question;
        $question->save();
        return $this->hienThiThemIMG();
    }

    public function createRepeat(Request $request) {
        $lesson = $_SESSION['lessonInsert'];
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = 0;
        $question->type_id = 4;
        $question->lesson_id = $lesson->id;
        $question->question = $request->question;
        $question->save();
        return $this->viewRepeat();
    }

    public function createTN (Request $request) {
        $lesson = $_SESSION['lessonInsert'];
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->type_id = 1;
        $question->lesson_id = $lesson->id;
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
        return $this->hienThiThemTN();
    }
  
    public function createIMG(Request $request) {
        $lesson = $_SESSION['lessonInsert'];
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = $request->vocabulary;
        $question->type_id = 2;
        $question->lesson_id = $lesson->id;
        $question->save();  
        return $this->hienThiThemIMG();
    }
}
