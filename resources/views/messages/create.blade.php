@extends('layouts.main')

@section('title', 'Criar Mensagens')

@section('content')

<div id="message-create-container" class="col-md-6 offset-md-3">
  <h1>Crie a sua mensagem</h1>
  <form action="/messages" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Titulo:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titulo da Mensagem">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="conteudo da mensagem?"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Mensagem">
  </form>
</div>

@endsection