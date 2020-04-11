@extends('navbar')

@section('window_title') Registrar-se | users.adm @endsection
@section('page_content')
    <div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block shadow-sm">
        <form method="POST" action="{{ route('login.register') }}"> @csrf
            <img class="mx-auto d-block mb-3" src="{{ asset('img/logo.png') }}" alt="u.a-logo">
            <h5 class="text-center mb-3"><strong>Registrar-se no users.adm</strong></h5>
            @include('messages.errors', ['errors' => $errors])
            <div class="form-group">
                <label for="name">Nome</label>
                <input class="form-control" id="name" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input class="form-control" id="cpf" name="cpf" type="text" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" id="email" name="email" type="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input class="form-control" id="password" name="password" type="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Repetir Senha</label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>                                                                                                                                                           
            <div class="form-group">
                <button class="btn btn-info">Registrar-se</button>
            </div>
        </form>
    </div>
@endsection
