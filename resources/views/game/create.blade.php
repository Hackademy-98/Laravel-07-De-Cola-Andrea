<x-layout title="  Creazione del Gioco">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Creazione del Gioco
                </h1>
            </div>
            {{-- in questo if stai passando il messaggio di succes contenuto nel with del GameController --}}
            @if(session()->has('success'))
            <div class="col-12 alert alert-success my-3">
                <p>{{session("success")}}</p>
            </div>
            @endif
            <div class="col-12 mt-5">
                <form method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}" >
                        @error('title') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                        @error('description') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select class="form-select" id="category" name="category">
                            <option selected>Seleziona la categoria</option>
                            @foreach($categories as $category)   
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            @error('category') <p class="text-danger">{{$message}}</p> @enderror
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{old('price')}}">
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