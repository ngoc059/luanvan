<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\question;
use App\answer;
use App\theme;
use App\vocabulary;
class questionController extends Controller
{
    public function viewInsertQuestion() {
        $lesson = lesson::All();
        $theme = theme::All();
        return view('them.themnghevietlai',['lesson'=> $lesson, 'theme'=> $theme]);
    }

    public function hienThiThemTN() {
        $lesson = lesson::All();
        $theme = theme::All();
        return view('them.themcautracnghiem',['lesson'=> $lesson, 'theme'=> $theme]);
    }

    public function hienThiThemIMG() {
        $lesson = lesson::All();
        $theme = theme::All();
        $vocabulary = vocabulary::All();
        return view('them.themhoctheohinhanh',['lesson'=> $lesson, 'vocabulary' => $vocabulary, 'theme'=> $theme]);
    }

    public function viewRepeat() {
        $lesson = lesson::All();
        $theme = theme::All();
        return view('them.themcaunghelaplai',['lesson'=> $lesson, 'theme'=> $theme]);
    }

    public function createLS(Request $request) {
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = 0;
        $question->type_id = 3;
        $question->lesson_id = $request->lesson;
        $question->question = $request->question;
        $question->save();
        return $this->hienThiThemIMG();
    }

    public function createRepeat(Request $request) {
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = 0;
        $question->type_id = 4;
        $question->lesson_id = $request->lesson;
        $question->question = $request->question;
        $question->save();
        return $this->viewInsertQuestion();
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
        return $this->hienThiThemTN();
    }
  
    public function createIMG(Request $request) {
        $question = new question;
        $question->name = $request->name;
        $question->description = $request->description;
        $question->vocabularyId = $request->vocabulary;
        $question->type_id = 2;
        $question->lesson_id = $request->lesson;
        $question->save();  
        return $this->hienThiThemIMG();
    }
}
