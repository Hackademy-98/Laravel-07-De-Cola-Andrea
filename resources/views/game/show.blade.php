<x-layout title="Dettagli">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="text-center">{{$game->title}}</h1>
            </div>
            <div class="col-12  mt-5 ">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4 ">
                            <img src="{{Storage::url($game->img)}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 text-center ">
                            <div class="card-body">
                                <p class="card-text mt-5">{{$game->description}}</p>
                                <p class="card-text mt-5">{{$game->price}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>