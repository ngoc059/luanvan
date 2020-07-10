<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\theme;
use App\ListLesson;
use App\ThemeView;
use App\comment;

session_start();

class lessonController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewInsertLesson() {
        $theme = theme::All();
        return view('them.thembaihoc',['theme'=> $theme]);
    }

    public function create(Request $request)
    {
        $lesson = new lesson;
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->theme_id = $request->theme;
        $lesson->is_finish = false;
        $lesson->save();
        return $this->viewListLesson();
    }

    public function getAjax($themeId) {
        $listLesson = lesson::where('theme_id', $themeId)->get();
        foreach($listLesson as $lesson) {
          echo  "<option value='".$lesson->id."'>".$lesson->name."</option>";
        }
    }

    public function getAjaxListLesson($themeId) {
        $listLesson = lesson::where('theme_id', $themeId)->get();
        foreach ($listLesson as $key => $item) {
        echo " <tr>
        <td>". $item->id ."</td>
        <td>". $item->name. "</td>
        <td> <a href='/question/add/".$item->id."'>thêm câu hỏi</a></td>
        <td> <a href='/lesson/update/".$item->id."'><i class='fas fa-edit'></i></a></td>
        <td><a href='/lesson/delete/".$item->id."'><i class='fas fa-trash'></i></a></td>
        </tr>";
        }        
    }

    public function viewListLessonV(){
        $result = array();
        $userId = $_SESSION['user']->id;
        $lesson = theme::join('lessons', 'lessons.theme_id', '=', 'themes.id')
        ->leftJoin('user_lesson', function ($join) {
            $id = $_SESSION['user']->id;
            $join->on('user_lesson.lesson_id', '=', 'lessons.id')->where('user_lesson.users_id', $id);
        })->select('lessons.theme_id', 'themes.name AS themeName', 'lessons.id', 'lessons.name', 'user_lesson.created_at AS dateCreate',
        'user_lesson.users_id AS userId', 'lessons.indexLesson AS indexLesson', 'themes.index_theme AS indexTheme')->orderBy('themes.index_theme', 'ASC')
        // ->orwhere('user_lesson.users_id',  $_SESSION['user']->id)
        ->get();
        Array($lesson->toArray());
        // return $lesson;
        $index = 0;
        // dd($lesson);
        $count = 0;
        foreach ($lesson as $element) {
            // $result[$element['theme_id']][] = $element;
            $result[strval($count)][] = $element;
            $count++;
            // echo("\n".strval($element)."\n");
            // echo($result);
        }

        // dd($result);
        $themess = [];
        // return $result;
        foreach ($result as $key => $value) {
            $lessons = [];
            $themes = [];
            $themes['index'] = $index % 2;
            foreach ($value as $s => $v) {
                $themes['indexTheme'] = $v->indexTheme;
                $themes['themeName'] = $v->themeName;
                $lessonI = new ThemeView;
                $lessonI->name = $v->name;
                $lessonI->lessonId = $v->id;
                $lessonI->indexLesson = $v->indexLesson;
                if(is_null($v->dateCreate)) {
                    $lessonI->dateDone = null;
                } else {
                    if($userId == $v->userId) {
                        $lessonI->dateDone = $v->dateCreate;
                    } else {
                        $lessonI->dateDone = null;
                    }
                }
                array_push($lessons, $lessonI);
            }
            // $themes['themeId'] = $key;
            $themes['themeId'] = $v['theme_id'];

            $check = false;

            foreach ($themess as $k_themess => $v_themess) {
                if ($v_themess['themeId'] == $themes['themeId'] && $v_themess['themeId'] != null) {

                    foreach ($lessons as $v_lessons) {
                        array_push ($themess[$k_themess]['listLesson'], $v_lessons);
                    }

                    // array_push ($themess[$k_themess]['listLesson'], $lessons);
                    
                    $check = true;
                }
            }

            if(!$check) {
                $themes['listLesson'] = $lessons;
                $index++;
                array_push($themess, $themes);
            }
            
        }
        $oldLesson = null;
        foreach ($themess as $key => $value) {
            $themess[$key]['countIndex'] = count($value['listLesson']);
            $countFinish = 0;
            
            usort($themess[$key]['listLesson'], function($a, $b)
            {
                return strcmp($a->indexLesson, $b->indexLesson);
            });
            foreach ($themess[$key]['listLesson'] as $k => $v) {
                if($v['dateDone'] !== null) {
                    $countFinish++;
                    $v['isDone'] = true;
                } else {
                    if ($oldLesson) {
                        if($oldLesson->dateDone !== null) {
                            $v['isDone'] = true;
                        } else {
                            $v['isDone'] = false;
                        }
                    } else {
                        $v['isDone'] = 2;
                    }
                    
                }
                $oldLesson = $v;
            }
            $themess[$key]['countIsDone'] = $countFinish;
        }
        return $themess;
        // dd($themess);
        // return view('learn.listlesson', compact('themess'));
    }

    public function viewListLesson() {
        $dataView = false;
        $themess = $this->viewListLessonV();
        return view('learn.listlesson', compact('themess', 'dataView'));
    }

    public function isViewErr() {
        $dataView = true;
        $themess = $this->viewListLessonV();
        return view('learn.listlesson', compact('themess', 'dataView'));
    }

    public function lesson($id){
        $lesson = lesson::where('theme_id', $id)->get();
        return $lesson;
        return view('learn.lesson', compact('lesson'));
    }
    public function list(){
        $theme = theme::all();
        $lesson = lesson::all();
        return view('list.danhsachbaihoc', compact('lesson', 'theme'));
    }

    public function deleteLesson ($id) {
        lesson::destroy($id);
        return redirect('/lesson/list');
    }

    public function updateLesson($id) {
        $lesson = lesson::find($id);
        $theme = theme::All();
        return view('sua.suabaihoc',['lesson'=> $lesson, 'theme' => $theme]); 
    }

    public function suaLesson(Request $request) {
        $lesson = lesson::find($request->id);
        $lesson->name = $request->name;
        $lesson->description = $request->description;
        $lesson->theme_id = $request->theme;
        $lesson->save();
        return redirect('/lesson/list');
    }

    public function postComment(Request $request)
    {
        $comment = new comment();
        $comment->lesson_id= $_SESSION['lessonId'];
        $comment->users_id= $_SESSION['user']->id;
        $comment->comment= $request->NoiDung;
        $comment->save();
        $id = $_SESSION['lessonId'];
        return redirect("/learn/get-list-question-by-lesson/$id")->with('thongbao','Them comment thanh cong');;
    }
}
