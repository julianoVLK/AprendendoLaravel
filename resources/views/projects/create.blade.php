@extends('layouts.main')

@section('title', 'JCV Projetos')

@section('content')

<div id="project-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastrar Projetos</h1>
    <form action="/projects" method="post">
        <div class="form-group">
            <label for="title">Projeto:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Projeto">
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição do Projeto">
        </div>

        <div class="form-group">
            <label for="language">Linguagens:</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="Linguagens Utilizadas">
        </div>
</div>

@endsection

