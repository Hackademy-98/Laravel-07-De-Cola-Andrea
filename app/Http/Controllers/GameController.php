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
        //
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
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Game $game)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Game $game)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Game $game)
    {
        //
    }
}
