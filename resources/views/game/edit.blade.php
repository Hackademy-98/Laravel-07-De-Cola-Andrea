<x-layout title="  Modifica del Gioco">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Modifica Del Gioco
                </h1>
            </div>
            {{-- in questo if stai passando il messaggio di succes contenuto nel with del GameController --}}
            @if(session()->has('success'))
            <div class="col-12 alert alert-success my-3">
                <p>{{session("success")}}</p>
            </div>
            @endif
            <div class="col-12 mt-5">
                <form method="POST" action="{{route('game.update',compact('game'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{$game->title}}" >
                        @error('title') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$game->description}}</textarea>
                        @error('description') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$game->price}}">
                        @error('price') <p class="text-danger">{{$message}} </p>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <input name="img" type="file" class="form-control" id="img" >
                        @error('img') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>