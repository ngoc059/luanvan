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
        return redirect('/theme/view-insert')->with('thongbao','thêm thành công');
    }

    public function list(){
        $theme = theme::all();
        return view('list.danhsachchude', compact('theme'));
    }
    
    public function deleteTheme ($id) {
        themes::destroy($id);
        return redirect('/theme/list');
    }
}
