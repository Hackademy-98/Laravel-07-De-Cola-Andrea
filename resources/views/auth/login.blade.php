<x-layout title="Login">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Login</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                        @error('email') <p class="text-denger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>