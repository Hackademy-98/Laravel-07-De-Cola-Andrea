<x-layout title="Registrati">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Registrati</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" id="username" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confiration" class="form-label">Password Confermata</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
