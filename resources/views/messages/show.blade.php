@extends('layouts.main')

@section('title', $message->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="info-container" class="col-md-6">
        <h1>{{ $message->title }}</h1>
        <p class="message-owner">Dono da Mensagem</p>
        <a href="#" class="btn btn-primary" id="message-submit">Confirmar Lido</a>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Conteudo da Mensagem:</h3>
        <p class="message-description">{{ $message->description }}</p>
      </div>
    </div>
  </div>

@endsection