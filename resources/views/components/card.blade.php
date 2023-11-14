<div class="col-12 ">
    <div class="card" >
        <img src="{{Storage::url($game->img)}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">{{$game->title}}</h5>
            <p class="card-text text-center">{{$game->price}}</p>
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
