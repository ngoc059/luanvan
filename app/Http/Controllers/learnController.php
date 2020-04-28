<?php
namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\vocabulary;
use App\answer;
use App\question;
use App\questionview;
session_start();
class learnController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListQuestionByLesson($lessonId) {
        unset($_SESSION['question']);
        $listQuestion = question::where('lesson_id', $lessonId)->get();
        $type = $listQuestion[0]->type_id;
        $question = $listQuestion[0];
        $questionView = new questionview;
        $questionView->listQuestion = $listQuestion;
        $questionView->stt = 0;
        $_SESSION['question'] = $questionView;
        switch ($type) {
            case '1':
                return $this->viewQuestMultipleChoice($question);
                break;
            case '2':
                return $this->viewQuestLearnByType($question);
                break;
            case '3':
                return $this->viewQuestListenToWrite($question);
                break;
            default:
                return $this->viewQuestMultipleChoice($question);
                break;
        }
    }

    public function viewQuestLearnByType($question)
    {
        $_SESSION['rightAnswer'] = $question->vocabularyId;
        $vocabulary = vocabulary::find($question->vocabularyId);
        $autoVocabulary = vocabulary::where('type_id', $vocabulary->type_id)
        ->where('id', '!=', $question->vocabularyId)
        ->inRandomOrder()
        ->take(2)
        ->get();
        $questionToView = Arr::collapse([[$vocabulary], $autoVocabulary]);
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        return view('learn.learnbytype',['listAnswer'=> $questionToView, 'question'=> $question]);
    }

    public function viewQuestListenToWrite($question)
    {  
        $answers = answer::where('question_id', $question->id)->get();
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        $_SESSION['rightAnswer'] = $answers[0]->name;
        return view('learn.nghevietlai',['question'=> $question]);
    }

    public function viewQuestMultipleChoice($question) {
        $answers = answer::where('question_id', $question->id)->get();
        $arrayAnswer = $answers->toArray();
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        $answer = array_search('true', array_column($arrayAnswer, 'is_corred'));
        $_SESSION['rightAnswer'] = $answers[$answer]->id;
        return view('learn.tracnghiem',['answers'=> $answers, 'question'=> $question->description]);
    }

    public function check(Request $request){
      if ($_SESSION['rightAnswer'] == $request->test) {
        $notification = 0;
      } else {
        $notification = 1;
      }
      $stt = $_SESSION['question']->stt;
      echo $notification;
      if (sizeof($_SESSION['question']->listQuestion) > $stt) {
        $type = $_SESSION['question']->listQuestion[$stt]->type_id;
        $question = $_SESSION['question']->listQuestion[$stt];
        switch ($type) {
          case '1':
              return $this->viewQuestMultipleChoice($question);
              break;
          case '2':
              return $this->viewQuestLearnByType($question);
              break;
          case '3':
              return $this->viewQuestListenToWrite($question);
              break;
          default:
              return $this->viewQuestMultipleChoice($question);
              break;
      }
      } else {

        return $_SESSION['user'];
          $levelNow = 40;          
          $level = 50;
          return view('level',['levelNow'=> $levelNow, 'level'=> $level]);
      }
    }
   
}