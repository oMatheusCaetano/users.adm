@extends('navbar')

@section('window_title') Novo Usuário | users.adm @endsection
@section('page_content')
<div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block shadow-sm">
    <form method="POST" action="{{ route('users.store') }}"> @csrf
        <h5 class="text-center mb-3"><strong>Cadastrar Novo Usuário</strong></h5>
        @include('messages.errors', ['errors' => $errors])
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text" required>
        </div>        
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input class="form-control" id="cpf" name="cpf" type="text">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" id="email" name="email" type="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input class="form-control" id="phone" name="phone" type="text">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input class="form-control" id="password" name="password" type="password" required>
        </div>
        <h5 class="text-center text-secondary mt-5 m-2">Endereço</h5>
        <div class="form-group">
            <label for="zip">CEP</label>
            <input class="form-control" id="zip" name="zip" type="text">
        </div>
        <div class="form-group">
            <label for="street">Rua</label>
            <input class="form-control" id="street" name="street" type="text">
        </div>
        <div class="form-group">
            <label for="street">Número</label>
            <input class="form-control" id="number" name="number" type="number">
        </div>
        <div class="form-group">
            <label for="complement">Complemento</label>
            <input class="form-control" id="complement" name="complement" type="text">
        </div>
        <div class="form-group">
            <label for="neighborhood">Bairro</label>
            <input class="form-control" id="neighborhood" name="neighborhood" type="text">
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input class="form-control" id="city" name="city" type="text">
        </div>
        <div class="form-group">
            <label for="state">Estado</label>
            <input class="form-control" id="state" name="state" type="text">
        </div>
        <div class="form-group">
            <button class="btn btn-info">Cadastrar Usuário</button>
        </div>
    </form>
</div>
@endsection
