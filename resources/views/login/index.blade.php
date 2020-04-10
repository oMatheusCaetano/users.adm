@extends('navbar')

@section('window_title') Login | users.adm @endsection
@section('page_content')
    <main>
        <div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block">
            <img class="mx-auto d-block mb-3" src="{{ asset('img/logo.png') }}" alt="u.a-logo">
            <div class="form-group">
                <label for="user_email">E-mail</label>
                <input class="form-control" id="user_email" type="email">
            </div>
            <div class="form-group">
                <label for="user_password">Senha</label>
                <input class="form-control" id="user_password" type="password">
            </div>
            <div class="form-group">
                <button class="btn btn-info">Entrar</button>
                <button class="btn btn-secondary">Registrar-se</button>
            </div>
        </div>
    </main> 
@endsection
