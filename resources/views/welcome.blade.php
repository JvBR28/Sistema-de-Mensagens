@extends('layouts.main')

@section('title', 'Evento de Mensagens')

@section('content')

<div class="row">
    @foreach($messages as $message)
    <div class="card col-md-2">
            <div class="card-body">
                <p class="card-date">17/05/2023</p>
                <h5 class="card-title">{{ $message->title }}</h5>
                <a href="/messages/{{ $message->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>

@endsection