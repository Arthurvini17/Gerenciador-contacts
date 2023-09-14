@extends('layouts.main')
@vite(['resources/css/create.css', 'resources/js/app.js'])
@section('content')

@if(session('mensagem'))
    <div  id="msg-create" class="alert-success">
        {{ session('mensagem') }}
    </div>
@endif

    <div class="container">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <h1>Adicione seu contato aqui</h1>
            <input type="text" name="name" placeholder="Nome do seu contato">
            <input type="number" name="number" placeholder="Numero do seu contato">
            <button type="submit">Enviar</button>
        </form>
    </div>

    
@endsection
