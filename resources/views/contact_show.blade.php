@extends('layouts.main')
@section('content')
    @vite(['resources/css/contact_show.css', 'resources/js/app.js']);
    <div class="container">
        <div class="card-contact">
            <h1>Nome: {{ ucfirst($contact->name) }} </h1>
            <h1>Numero: {{ $contact->number }}</h1>

            <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}">
                <button class="button-edit">Editar usuario</button>
            </a>

        </div>
    </div>
@endsection
