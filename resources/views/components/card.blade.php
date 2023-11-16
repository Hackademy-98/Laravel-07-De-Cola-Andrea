<div class="col-12 my-5 d-flex justify-content-center">
    <div class="card">
        <img src="{{Storage::url($game->img)}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">{{$game->title}}</h5>
            <p class="card-text text-center">{{$game->price}}</p>
            <div>
                <a href="{{route('game.filterByCategory',["category"=>$game->category])}}" class="card-text text-center text-decoration-none" >{{$game->category->name}}</a>
            </div>
                <div class="my-2 d-flex justify-content-around">
                    @foreach($game->consoles as $console)
                    <a href="" class="text-decoration-none">{{$console->name}}</a>
                    @endforeach
                </div>
            @auth
            <div class="d-flex justify-content-around">
                <a href="{{route('game.show', compact('game'))}}" class="btn btn-primary">Vai Al Dettaglio</a>
                <a href="{{route('game.edit',compact('game'))}}" class="btn btn-info">Modifica</a>
                <form action="{{route('game.destroy',compact('game'))}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>
