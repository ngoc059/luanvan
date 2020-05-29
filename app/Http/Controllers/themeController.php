<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theme;

class ThemeController extends Controller
{

    public function create(Request $request)
    {
        $theme = new theme;
        $theme->name = $request->name;
        $theme->description = $request->description;
        $theme->save();
        return $theme;
    }

    public function index(){
        $theme = theme::all();
        // dd($theme->toArray());
        return view('chude', compact('theme'));
    }

    public function list(){
        $theme = theme::all();
        return view('list.danhsachchude', compact('theme'));
    }
    
}
