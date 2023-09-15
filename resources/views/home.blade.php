@extends('layouts.main')
@section('title', 'principal')
@vite(['resources/css/home.css', 'resources/js/app.js'])
@section('content')

    @if (session('mensagem'))
        <div id="msg-exc" class="alert-success">
            {{ session('mensagem') }}
        </div>
    @endif

    @if (session('msg-edit'))
        <div id="msg-edit" class="alert-updated">
            {{ session('msg-edit') }}
        </div>
    @endif

    <div class="search-container">
        @if ($search)
            @if (count($contacts) > 0)
                <h2>Buscando por: {{ $search }}</h2>
            @else
                <h2 class="search-user">Nenhum resultado encontrado para: {{ $search }}</h2>
            @endif
        @else
            <h1 class="search-contacts">Busque seu contato</h1>
        @endif
        <form action="/" method="GET">
            <input type="search" name="search">
        </form>
    </div>

    <div class="container">
        @if (isset($contacts) && count($contacts) > 0)
            @foreach ($contacts as $contact)
                <div class="body-card">
                    <div class="body-title">
                        <p>{{ ucfirst($contact->name) }}</p>
                        <p>{{ $contact->number }}</p>

                        <a href="{{ route('contact.show', ['contact' => $contact->id]) }}">
                            <button class="button-show">Ver Contato</button>
                        </a>
                        <form action="{{ route('contact.destroy', ['contact' => $contact->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button-delete">Deletar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @elseif(count($contacts) == 0 && $search)
            <p class="search-user">Usuário não encontrado. <a href="{{ route('home.index') }}">Ver todos</a></p>
        @else
            <p class="msg-exc">Você ainda não adicionou nenhum contato <a href="{{ route('contact.create') }}">Adicione
                    Aqui</a></p>
        @endif
    </div>

@endsection
