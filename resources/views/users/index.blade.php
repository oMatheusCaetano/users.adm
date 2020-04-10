@extends('navbar')

@section('window_title') Usuários | users.adm @endsection
@section('page_content')
    <main>
        <table class="table bg-white mt-2">
            <thead class="">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->cpf }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phones->first()['number'] }}</td>
                        <td>{{ $user->address['street'] . ', ' . $user->address['number'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main> 
@endsection
