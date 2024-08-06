@extends('layouts.master')
<!-- Isso é uma pagina de formulário só isso-->
@section('content')
<div class="container">
    <h1 class="my-4">Criar Produto</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST"> <!-- O metodo POST cria um Array no navegador e armazena todas as informações dos inpus em uma especie de stringgrande e o php usa o request pega e interpreta as informações-->
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" class="form-control" placeholder="Descrição"></textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" class="form-control" placeholder="Preço">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>