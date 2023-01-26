@extends('layouts.site')

@section('titulo', 'Notícias')

@section('conteudo')

    <div class="noticias  vh-100">
        <div class="container">
            <h2 class="py-5">Categoria Notícias</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- card -->
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/150x80?&text=Imagem" alt="" />
                        <div class="card-body">
                            <h4>
                                <a href="visualizar_noticia.html">Titulo da Notícia</a>
                            </h4>
                            <p class="card-text">
                                This is a wider card with supporting text
                                below as a natural lead-in to additional
                                content. This content is a little bit
                                longer.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge text-bg-secondary">Categoria</span>
                                <small class="text-muted">9 min</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /card -->
            </div>
        </div>
    </div>
@endsection
