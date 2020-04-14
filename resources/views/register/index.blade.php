@extends('navbar')

@section('window_title') Registrar-se | users.adm @endsection
@section('page_content')
    <div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block shadow-sm">
        <form method="POST" action="{{ route('register.store') }}"> @csrf
            <img class="mx-auto d-block mb-3" src="{{ asset('img/logo.png') }}" alt="u.a-logo">
            <h5 class="text-center mb-3"><strong>Registrar-se no users.adm</strong></h5>
            @include('messages.errors', ['errors' => $errors])
            <div class="form-group">
                <label for="name">Nome<span class="text-danger">*</span></label>
                <input class="form-control" id="name" name="name" type="text" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF<span class="text-danger">*</span></label>
                <input class="form-control" id="cpf" name="cpf" type="text" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail<span class="text-danger">*</span></label>
                <input class="form-control" id="email" name="email" type="email" required>
            </div>
            <div class="form-group">
                <label for="birthDate">Nascimento</span></label>
                <input class="form-control" id="birthDate" name="birthDate" type="date">
            </div>
            <div class="form-group">
                <label for="password">Senha<span class="text-danger">*</span></label>
                <input class="form-control" id="password" name="password" type="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Repetir Senha<span class="text-danger">*</span></label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>                                                                                                                                                           
            <div class="form-group">
                <button class="btn btn-info">Registrar-se</button>
            </div>
        </form>
    </div>
@endsection
