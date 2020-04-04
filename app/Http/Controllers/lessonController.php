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
        $lesson->save();
        return $lesson;
    }

    public function viewListLesson(){
        $lesson = lesson::All();
        return view('learn.listlesson',['lessons'=> $lesson]);
    }
}
