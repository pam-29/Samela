<?php

namespace App\Http\Controllers;
use App\Models\Singers;


use Illuminate\Http\Request;

class singerController extends Controller
{
    public function list_singer(){
        $singer = Singers::all();
            //    dd($singer);
        return view('Songs.list_singer', compact('singer'));
    }

    public function show_singer($id){
        $singer = Singers::with('songs')->findOrFail($id);
        return view('Songs.their-song', compact('singer'));
    }

    public function fill(Request $request){
        Singers::create([
            'name'=> $request->input('name'),
        ]);
        return redirect()->route('songs.singer');
    }
}
