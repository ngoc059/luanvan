<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\theme;
use App\ListLesson;
use App\ThemeView;
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

    public function viewListLesson(){
        $result = array();
        $lesson = theme::leftjoin('lessons', 'lessons.theme_id', '=', 'themes.id')
        ->leftJoin('user_lesson', 'user_lesson.lesson_id', '=', 'lessons.id')
        ->select('lessons.theme_id', 'themes.name AS themeName', 'lessons.id', 'lessons.name', 'user_lesson.created_at AS dateCreate',
        'user_lesson.users_id AS userId')
        // ->orwhere('user_lesson.users_id',  $_SESSION['user']->id)
        ->get();
        Array($lesson);
        // return $lesson;
        $index = 0;
        foreach ($lesson as $element) {
            $result[$element['theme_id']][] = $element;
        }
        $themess = [];
        $userId = $_SESSION['user']->id;
        foreach ($result as $key => $value) {
            $lessons = [];
            $themes = [];
            $themes['index'] = $index % 2;
            foreach ($value as $s => $v) {
                $themes['themeName'] = $v->themeName;
                $lessonI = new ThemeView;
                $lessonI->name = $v->name;
                $lessonI->lessonId = $v->id;
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
            $themes['themeId'] = $key;
            $themes['listLesson'] = $lessons;
            $index++;
            array_push($themess, $themes);
        }
        return view('learn.listlesson', compact('themess'));
    }

    public function lesson($id){
        $lesson = lesson::where('theme_id', $id)->get();
        return $lesson;
        return view('learn.lesson', compact('lesson'));
    }
    public function list(){
        $lesson = lesson::all();
        return view('list.danhsachbaihoc', compact('lesson'));
    }
}
