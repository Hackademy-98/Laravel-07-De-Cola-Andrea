<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameStoreRequest;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        // in questa variabile catturi tutti i dati del modello Game e quindi quelli contenuti nel database
        $games= Game::all();
        return view('game.index',compact('games'));
        // il compact serve creare come un array associativo 
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('game.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(GameStoreRequest $request)
    {
        // in questo caso stai gestendo il carimanto di un immagine
        $file= $request->file('img');
        Game::create([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "img" => $file ? $file->store('public/images') : "public/images/default.png"
        ]);
        return redirect()->route('games.create')->with('success','Gioco inserito con successo!');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Game $game)
    {
        // in questa funzione il find e implicito 
        // dd($game);
        return view('game.show',compact('game'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Game $game)
    {
        return view('game.edit',compact('game'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(GameStoreRequest $request, Game $game)
    {
        // con questa funzione riesci a modificare tramite il form i dati 
        $file=$request->file('img');
        $game->update([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "img" => $file ? $file->store("public/images") : $game->img
        ]);

        return redirect()->route("game.edit",compact('game'))->with("success","Il Gioco e stato modificato correttamente!");
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('game.index')->with("success","Il Gioco e stato eliminato correttamente!");
    }
}
