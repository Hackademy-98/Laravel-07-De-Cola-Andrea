<x-layout title="Tutti i Giochi">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center">Tutti I Giochi</h1>
            </div>
            @if(session()->has('success'))
            <div class="col-12 alert alert-success">
                <p class="mt-2">{{session('success')}}</p>
            </div>
            @endif
            @foreach ($games as $game)
            <div class="col-4 mt-3">
                {{-- quando usi il componente ricordati di richiamare la variabile --}}
                <x-card :game="$game"/>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>