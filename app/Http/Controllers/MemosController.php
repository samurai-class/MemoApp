<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemosController extends Controller
{
    //
    public function index(){
        $memos = Memo::orderBy('created_at','desc')->get();
        return view('index', ['memos' => $memos]);
    }

    //create.blade.phpをレンダリングして返す処理
    public function create(){
        return view('create');
    }

    //
    public function store(Request $request){
        $content = $request->validate(['content' => 'required|max:500']);
        Memo::create($content);
        return redirect()->route('index');
    }

}
