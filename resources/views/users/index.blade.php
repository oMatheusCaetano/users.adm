@extends('navbar')

@section('window_title') Usuários | users.adm @endsection
@section('page_title') Home @endsection
@section('page_content')
    <table class="table bg-white mt-2 shadow-sm">
        <thead class="">
            <tr>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Nascimento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>

                    <td>
                        <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#{{ 'row_' . $user->id }}">Dados</button>
                        <div class="modal fade" id="{{ 'row_' . $user->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $user->name }}</h5>
                                        <button class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><h6 class="text-secondary text-center">Dados Pessois</h6></li>
                                            <li class="list-group-item">
                                                <span class="text-info">Nome: </span>{{ $user->name }}
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-info">CPF: </span>{{ $user->cpf }}
                                            </li>                                         
                                            <li class="list-group-item">
                                                <span class="text-info">E-mail: </span>{{ $user->email }}
                                            </li>                                        
                                            <li class="list-group-item">
                                                <span class="text-info">Nascimento: </span>{{ $user->birthDate }}
                                            </li>                                         
                                            <li class="list-group-item">
                                                <span class="text-info">Telefones: </span>
                                                @foreach ($user->phones as $phone)
                                                    {{ $phone->number }} |
                                                @endforeach
                                            </li>
                                            <li class="list-group-item"><h6 class="text-secondary text-center mt-3">Dados do Endereço</h6></li>
                                            <li class="list-group-item">
                                                <span class="text-info">Rua: </span>{{  !is_null($user->address) ? $user->address['street'] : '' }}
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-info">Número: </span>{{  !is_null($user->address) ? $user->address['number'] : '' }}
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-info">Complemento: </span>{{  !is_null($user->address) ? $user->address['complement'] : '' }}
                                            </li>   
                                            <li class="list-group-item">
                                                <span class="text-info">Bairro: </span>{{  !is_null($user->address) ? $user->address['neighborhood'] : '' }}
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-info">Cep: </span>{{  !is_null($user->address) ? $user->address['zip'] : '' }}
                                            </li>   
                                            <li class="list-group-item">
                                                <span class="text-info">Cidade: </span>{{  !is_null($user->address) ? $user->address['city'] : '' }}
                                            </li> 
                                            <li class="list-group-item">
                                                <span class="text-info">Estado: </span>{{  !is_null($user->address) ? $user->address['state'] : '' }}
                                            </li>   
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->birthDate }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ !is_null($user->phones->first()) ? $user->phones->first()['number'] : ''}}</td>
                    <td>{{ !is_null($user->address) ? $user->address['street'] . ', ' . $user->address['number'] : ''}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
