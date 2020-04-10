@extends('navbar')

@section('window_title') Login | users.adm @endsection
@section('page_content')
    <main>
        <div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block">
           <form method="POST" action="{{ route('login.access') }}"> @csrf
                <img class="mx-auto d-block mb-3" src="{{ asset('img/logo.png') }}" alt="u.a-logo">
                <h5 class="text-center mb-3"><strong>Entrar no users.adm</strong></h5>
                @include('messages.errors', ['errors' => $errors])
                <div class="form-group">
                    <label for="user_email">E-mail</label>
                    <input class="form-control" id="user_email" name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="user_password">Senha</label>
                    <input class="form-control" id="user_password" name="password" type="password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Entrar</button>
                    <button class="btn btn-secondary">Registrar-se</button>
                </div>
           </form>
        </div>
    </main> 
@endsection
