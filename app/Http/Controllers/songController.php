<?php

namespace App\Http\Controllers;
use App\Models\Songs;
use App\Models\Singers;


use Illuminate\Http\Request;

class songController extends Controller
{
    public function create(){
        return view('Songs.create');
    }

    //recuperer les elements créer dans create
    public function store(Request $request){
        $singer = Singers::where('name', $request->input('singer'))->first();

        if ($singer) {
            Songs::create([
                'title'=> $request->input('title'),
                'singer'=> $request->input('singer'),
                'audio'=> $request->input('audio'),
                'lyrics'=> $request->input('lyrics'),
                'photo'=> $request->input('photo'),
                'category'=> $request->input('category'),
                'singer_id'=> $singer->id,
            ]);
        }else{
            $singer = Singers::create([ 
                'name'=>$request->input('singer'),
            ]);

            $singer->songs()->create([
                'title'    => $request->input('title'),
                'singer'   => $request->input('singer'),
                'audio'    => $request->input('audio'),
                'lyrics'   => $request->input('lyrics'),
                'photo'    => $request->input('photo'),
                'category' => $request->input('category'),
            ]);
        }

        return redirect()->route('songs.list');
    }

    public function list_all(){
        $songs = Songs::all();
        return view('Songs.all', compact('songs'));
    }

    public function show($id){
        $song= Songs::findOrFail($id);
        return view('Songs.info', compact('song'));
    }

    public function update(Request $request,$id){
        $song= Songs::findOrFail($id);
        $song->update([
            'title'=> $request->input('title'),
            'singer'=> $request->input('singer'),
            'audio'=> $request->input('audio'),
            'lyrics'=> $request->input('lyrics'),
            'photo'=> $request->input('photo'),
            'category'=> $request->input('category'),
            'singer_id'=> $request->input('singer_id'),
        ]);
        return redirect()->route('songs.list', $id);
    }

    public function delete($id){
        $song= Songs::findOrFail($id);
        $song->delete();
        return 'Song deleted';
    }

    public function edit($id){
        $song= Songs::findOrFail($id);
        return view('Songs.edit', compact('song'));
    }
}
