<x-layout title="Categorie">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">{{$category->name}}</h1>
        </div>
        @foreach($category->games as $game)
        <div class="col-12 col-md-4 mt-3">
            <div class="card" >
                <img src="{{Storage::url($game->img)}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">{{$game->title}}</h5>
                    <p class="card-text text-center">{{$game->price}}</p>
                    <a href="{{route('game.filterByCategory',["category"=>$game->category])}}" class="card-text text-end text-decoration-none">{{$game->category->name}}</a>
                    <div class="d-flex justify-content-around">
                        <a href="{{route('game.show', compact('game'))}}" class="btn btn-primary">Vai Al Dettaglio</a>
                        <a href="{{route('game.edit',compact('game'))}}" class="btn btn-info">Modifica</a>
                        <form action="{{route('game.destroy',compact('game'))}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
</x-layout>

{{-- ricordati di mettere tutto dentro la row --}}