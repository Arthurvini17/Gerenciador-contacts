@extends('layouts.main')
@section('content')
    @vite(['resources/css/contact_edit.css', 'resources/js/app.js']);

    <div class="container">
        @csrf
        <h1>Editar {{$contact->name}}</h1>
        <form action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="POST">
            @csrf
            @method('put')
            <input class="text-name" type="text" name="name" value="{{ $contact->name }}">
            <input class="text-number" type="number" name="number" value="{{ $contact->number }}">
            <input type="submit" value="enviar">
        </form>
    </div>
@endsection
