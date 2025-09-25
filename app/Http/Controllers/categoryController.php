<?php

namespace App\Http\Controllers;
use App\Models\Songs;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function create(){
        return view('');
    }

    //recuperer les elements créer dans create
    public function store(Request $request){
        Songs::create([
            'title'=> $request->input('title'),
            'singer'=> $request->input('singer'),
            'audio'=> $request->input('audio'),
            'lyrics'=> $request->input('lyrics'),
            'photo'=> $request->input('photo'),
        ]);
        return redirect()->route('');
    }

    public function list_all(){
        $songs = Songs::all();
        return view('Songs.category', compact('Songs'));
    }

    public function show($id){
        $song= Songs::findOrFail($id);
        return view('', compact(''));
    }

    public function update(Request $request,$id){
        $song= Songs::findOrFail($id);
        $song->update([
            'title'=> $request->input('title'),
            'singer'=> $request->input('singer'),
            'audio'=> $request->input('audio'),
            'lyrics'=> $request->input('lyrics'),
            'photo'=> $request->input('photo'),
        ]);
        return redirect()->route('');
    }

    public function delete($id){
        $song= Songs::findOrFail($id);
        $song->delete();
        return 'Song deleted';
    }

    public function edit($id){
        $song= Songs::findOrFail($id);
        return view('', compact(''));
    }
}
