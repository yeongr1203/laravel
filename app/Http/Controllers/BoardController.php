<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    //  p.77 라우트명의 관례
    public function index() {
        $list = Board::select(['id', 'title', 'hits', 'created_at'])->orderBy('id','desc')->get();
        return view('board/index')->with('list', $list);
        // return "Board Index";
        // return view('board/index')->with('list', Board::all());
        // return view('board/index')->with('list', Board::orderBy('id', 'desc')->get());      
        // select * from boards order by id desc; 와 동일함.
        // 전체를 select 하고, 그걸 list로 담는 것.
    }

    public function create() {      // 화면
        return view('board/create');
    }

    public function store(Request $req) {       // 내용 저장할때, 
        $board = new Board([
            "title" => $req->input('title'),    // get은 이렇게 작성!
            "ctnt" => $req->input('ctnt'),
            "hits" => 0
        ]);
        $board -> save();       // 내용저장
        return redirect('/boards'); // 리다이렉트(이동됨)
    }

    //
    public function show(Request $req) {        // 
        $id = $req->input('id');
        return view('board/show')->with('data',Board::findOrFail($id));
    }

    // 삭제
    public function destroy(Request $req) {
        $id = $req->input('id');
        Board::find($id)->delete();
        return redirect('/boards');
    }
}
