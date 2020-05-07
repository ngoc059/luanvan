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
    
}
