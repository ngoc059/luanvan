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
use App\userLesson;
use App\comment;
use Session;
use App\Http\Controllers;
session_start();
class learnController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListQuestionByLesson($lessonId) {
        // echo $lessonId;
        $_SESSION['lessonId'] = $lessonId;
        unset($_SESSION['question']);
        $listQuestion = question::where('lesson_id', $lessonId)->inRandomOrder()->get();
        $type = $listQuestion[0]->type_id;
        $question = $listQuestion[0];
        $questionView = new questionview;
        $questionView->listQuestion = $listQuestion;
        $questionView->stt = 0;
        $_SESSION['question'] = $questionView;
        if(sizeof($_SESSION['question']->listQuestion) == 0) {
            return redirect('/lesson/lesson-list');
         }
        $listComment = $this->getListComment($lessonId);
        Session::put('listComment', $listComment);
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
            case '4':
                return $this->viewQuestListenToRepeat($question);
                break;
        }
    }

    public function getListComment($lessonId) {
        $listComment = comment::where('lesson_id', $lessonId)
        ->join('users', 'users.id', '=', 'comment.users_id')
        ->select('comment.lesson_id AS lessonId', 'users.full_name  AS userName', 'comment.id AS commentId', 'comment.comment', 'comment.created_at')
        ->get();
        return $listComment;
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
        $process = [];
        $process['processNow'] = $_SESSION['question']->stt - 1;
        $process['total'] = sizeof($_SESSION['question']->listQuestion);
        $process['persen'] =  ($process['processNow'] / $process['total']) * 100;
        return view('learn.learnbytype',['listAnswer'=> $questionToView, 'question'=> $question, 'process'=> $process]);
    }

    public function viewQuestListenToWrite($question)
    {  
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        $_SESSION['rightAnswer'] = $question->question;
        $process = [];
        $process['processNow'] = $_SESSION['question']->stt - 1;
        $process['total'] = sizeof($_SESSION['question']->listQuestion);
        $process['persen'] =  ($process['processNow'] / $process['total']) * 100;
        return view('learn.nghevietlai',['question'=> $question, 'process'=> $process]);
    }

    public function viewQuestListenToRepeat($question)
    {  
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        $_SESSION['rightAnswer'] = $question->question;
        $process = [];
        $process['processNow'] = $_SESSION['question']->stt - 1;
        $process['total'] = sizeof($_SESSION['question']->listQuestion);
        $process['persen'] =  ($process['processNow'] / $process['total']) * 100;

        return view('learn.nghelaplai',['question'=> $question, 'process'=> $process]);
    }

    public function viewQuestMultipleChoice($question) {
        $answers = answer::where('question_id', $question->id)->get();
        $arrayAnswer = $answers->toArray();
        $_SESSION['question']->stt = $_SESSION['question']->stt +1;
        $answer = array_search('true', array_column($arrayAnswer, 'is_corred'));
        $_SESSION['rightAnswer'] = $answers[$answer]->id;
        $process = [];
        $process['processNow'] = $_SESSION['question']->stt - 1;
        $process['total'] = sizeof($_SESSION['question']->listQuestion);
        $process['persen'] =  ($process['processNow'] / $process['total']) * 100;
        return view('learn.tracnghiem',['answers'=> $answers, 'question'=> $question->description, 'process'=> $process]);
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
         case '4':
              return $this->viewQuestListenToRepeat($question);
              break;
        }
      } else {
        $this->insertUserLesson( $_SESSION['user']->id, $_SESSION['lessonId']);
        return $this->checkAndInsertLevel();
      }
    }

    private function insertUserLesson($userId = 1, $lessonId = 1) {
        $checkE = userLesson::where('users_id', $userId)->where('lesson_id', $lessonId)->first();
        if (!$checkE){
            $obj = new userLesson;
            $obj->users_id = $userId;
            $obj->lesson_id = $lessonId;
            $obj->save();
        }
    }

    private function checkAndInsertLevel() {
        $level = 0;
        $percent = 0;
        $experience = 0;
        $levelInsert = new level;
        $getLesson = lesson::where('id', $_SESSION['lessonId'])->first();
        $levelOfUser = level::where('users_id', $_SESSION['user']->id)->first();
        $levelInsert->users_id = $_SESSION['user']->id;
        if($levelOfUser) {
            $levelInsert->id = $levelOfUser->id;
            $level = $levelOfUser->level;
            $percent = $levelOfUser->percent;
            $experience = $percent + $getLesson->experience;
            if ($experience > 100) {
                $levelInsert->level = $levelOfUser->level + 1;
                $levelInsert->percent = $experience - 100;
            } else {
                $levelInsert->level = $levelOfUser->level;
                $levelInsert->percent = $experience;
            }
            $levelInsert->update();
        } else {
            $levelInsert->id = $levelOfUser->id;
            $levelInsert->level = 0;
            $level = 0;
            $percent = $getLesson->experience;
            $experience = $getLesson->experience;
            $levelInsert->percent = 0;
            $levelInsert->save();
        }
        return view('level',['percent'=> $percent, 'level'=> $level, 'experience'=>$experience]);
    }
   
}