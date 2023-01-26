@extends('layouts.admin')

@section('conteudo')
<div
class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Cadastrar Notícias</h1>
<div class="btn-toolbar mb-2 mb-md-0">
    <!-- Botão na Esquerda -->

</div>
</div>

<div class="formulario">
<form class="row g-3">
    <div class="col-md-12">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control is-invalid" id="titulo"
            placeholder="Insira o título">
        <div class="invalid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-12">
        <label for="introducao" class="form-label">Introdução</label>
        <input type="text" class="form-control" id="introducao" placeholder="Insira a introdução">
    </div>
    <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" rows="3"></textarea>
    </div>
    <div class="col-md-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status">
            <option>Ativo</option>
            <option>Inativo</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="destaque" class="form-label">Página Home</label>
        <div class="form-check form-switch form-switch-md">
            <input class="form-check-input" name="destaque" type="checkbox" id="destaque">
            <label class="form-check-label p-1" for="destaque">Colocar em Destaque</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
</div>

@endsection
