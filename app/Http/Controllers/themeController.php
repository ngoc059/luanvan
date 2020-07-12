<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Session;
use App\theme;
class ThemeController extends Controller
{

    public function create(Request $request)
    {
        $listLesson = theme::MAX('index_theme')
        ->first();
        $index = 0;
        if ($listLesson) {
            $index = $listLesson->indexLesson + 1;
        }
        $theme = new theme;
        $theme->name = $request->name;
        $theme->description = $request->description;
        $theme->index_theme = $index;
        // $theme->save();
        return redirect('theme/view-insert')->with('thongbao','sssssss');
    }

    public function viewCreateTheme() {
        return view('them.themchude');
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
