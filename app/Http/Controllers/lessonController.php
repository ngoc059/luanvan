<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\theme;

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
        $lesson = lesson::All();
        return view('learn.listlesson',['lessons'=> $lesson]);
    }

    public function lesson($id){
        $lesson = lesson::where('theme_id', $id)->get();
        return view('learn.lesson', compact('lesson'));
    }
}
