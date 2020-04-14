@extends('navbar')
<?php 
    $user = isset($baseUser) ? $baseUser : new App\User();
    $phones = $user->phones;
    $address = $user->address;
?>
@section('page_content')
    <div class="col-md-7 mt-5 p-4 bg-white mx-auto d-block shadow-sm">
        <form method="POST" action="{{ route($targetRoute)  }}"> @csrf
            <h5 class="text-center mb-3"><strong>@yield('form_title')</strong></h5>
            @include('messages.errors', ['errors' => $errors])
            <input type="number" name="user_id" value="{{ $user->id }}" hidden>
            <div class="form-group">
                <label for="name">Nome<span class="text-danger">*</span></label>
                <input class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>        
            <div class="form-group">
                <label for="cpf">CPF<span class="text-danger">*</span></label>
                <input class="form-control" id="cpf" name="cpf" value="{{ $user->cpf }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail<span class="text-danger">*</span></label>
                <input class="form-control" id="email" name="email" type="email" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="birthDate">Nascimento</span></label>
                <input class="form-control" id="birthDate" name="birthDate" type="date">
            </div>
            <div class="form-group" id="phones_box">
                <label>Telefones</label>
                <input class="btn btn-info btn-sm" type="button" value="+" onclick="newPhoneField()">
                <input class="form-control mb-2" name="phones[]" value="" hidden>
                @foreach ($phones as $phone)
                    <input class="form-control mb-2 phone" name="phones[]" value="{{ $phone->number }}">
                @endforeach
                <input class="form-control mb-2 phone" name="phones[]">
            </div>
            <div class="form-group">
                <label for="password">Senha<span class="text-danger">*</span></label>
                <input class="form-control" id="password" name="password" type="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Repetir Senha<span class="text-danger">*</span></label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
            </div>   
            <h5 class="text-center text-secondary mt-5 m-2">Endereço</h5>
            <input type="number" name="address_id" value="{{ isset($address) ? $address->id : '' }}" hidden>
            <div class="form-group">
                <label for="zip">CEP</label>
                <div class="input-group">
                    <input class="form-control"  id="zip" name="zip" value="{{ isset($address) ? $address->zip : '' }}"  maxlength="10">
                    <input type="button" class="input-group-append btn btn-success btn-sm" value="Buscar CEP" onclick="searchByCep()">
                </div>
            </div>
            <div class="form-group">
                <label for="street">Rua</label>
                <input class="form-control" id="street" name="street" value="{{ isset($address) ? $address->street : '' }}" >
            </div>
            <div class="form-group">
                <label for="street">Número</label>
                <input class="form-control" id="number" name="number" value="{{ isset($address) ? $address->number : '' }}" type="number">
            </div>
            <div class="form-group">
                <label for="complement">Complemento</label>
                <input class="form-control" id="complement" name="complement" value="{{ isset($address) ? $address->complement : '' }}" >
            </div>
            <div class="form-group">
                <label for="neighborhood">Bairro</label>
                <input class="form-control" id="neighborhood" name="neighborhood" value="{{ isset($address) ? $address->neighborhood : '' }}" >
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input class="form-control" id="city" name="city" value="{{ isset($address) ? $address->city : '' }}" >
            </div>
            <div class="form-group">
                <label for="state">Estado</label>
                <input class="form-control" id="state" name="state" value="{{ isset($address) ? $address->state : '' }}" >
            </div>
            <div class="form-group">
                <button class="btn btn-info">{{ isset($user->id) ? 'Salvar Alterações' : 'Cadastrar Novo Usuário' }}</button>
            </div>
        </form>
    </div>
    
    @include('users.js.create')
@endsection
