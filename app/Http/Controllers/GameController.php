<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\GameStoreRequest;

class GameController extends Controller
{
    // middleware
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
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
        $categories = Category::all();
        $consoles = Console::all();
        return view('game.create',compact("categories","consoles"));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(GameStoreRequest $request)
    {
        // in questo caso stai gestendo il carimanto di un immagine
        $file= $request->file('img');
        $game = Game::create([
            "title" => $request->title,
            "description" => $request->description,
            "price" => $request->price,
            "img" => $file ? $file->store('public/images') : "public/images/default.png",
            "category_id" => $request->category
        ]);
        $game->consoles()->attach($request->console);
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
        $categories = Category::all();
        $consoles = Console::all();
        return view('game.edit',compact('game','categories','consoles'));
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
            "img" => $file ? $file->store("public/images") : $game->img,
            "category" => $request->category
        ]);
        $game->consoles()->detach();
        $game->consoles()->attach($request -> console);
        return redirect()->route("game.edit",compact('game'))->with("success","Il Gioco e stato modificato correttamente!");
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Game $game)
    {
        // eliminanare con n-n
        foreach($game->consoles as $console){
            $game->consoles()->detach($console);
        }
        $game->delete();
        
        return redirect()->route('game.index')->with("success","Il Gioco e stato eliminato correttamente!");
    }
    // filtra i giochi in base alla categoria selezionata
    public function filterByCategory(Category $category){
        $games = $category->games;
        return view('game.filterByCategory',compact("category"));
    }
}