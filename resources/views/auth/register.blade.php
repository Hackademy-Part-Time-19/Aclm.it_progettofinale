<x-layout>
    <div class="container" style="margin-top: 50px">
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-4 mx-auto" style="margin-bottom: 0%">
                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <h1>Registrati</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation">
                    </div>
                    <br>
                    <p>Già registrato?<a href="{{ route('login') }}"><br>Clicca qui</a></p>

                    <button type="submit" class="btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
