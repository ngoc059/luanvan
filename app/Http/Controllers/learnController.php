<?php
namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\vocabulary;
use App\answer;
use App\question;
use App\level;
use App\lesson;
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
        $_SESSION['lessonId'] = $lessonId;
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
        $level = 0;
        $percent = 0;
        $experience = 0;
        $levelInsert = new level;
        $getLesson = lesson::where('id', $_SESSION['lessonId'])->first();
        $levelOfUser = level::where('users_id', $_SESSION['user']->id)->first();
        $levelInsert->users_id = $_SESSION['user']->id;
        if($levelOfUser) {
            $level = $levelOfUser->level;
            $percent = $levelOfUser->percent;
            $experience = $percent + $getLesson->experience;
            if ($experience > 100) {
                $levelInsert->level = $levelOfUser->level + 1;
                $levelInsert->percent = $experience - 100;
            } else {
                $levelInsert->level = $levelOfUser->level;
                $levelInsert->percent = $experience;
                $levelInsert.update($levelOfUser->id);
            }
        } else {
            $levelInsert->level = 0;
            $levelInsert->percent = $getLesson->experience;
            $levelInsert->save();
        }
        return view('level',['percent'=> $percent, 'level'=> $level, 'experience'=>$experience]);
      }
    }
   
}