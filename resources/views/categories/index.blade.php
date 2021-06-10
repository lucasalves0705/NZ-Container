@extends('layout.admin')

@section('content')
    <div class="gallery" id="menu">
        <div class="container">
            <div class="w3l-heading">
                <h3>Lista de Categorias</h3>
            </div>

            <!-- input -->
            <div class="contact creat-category" id="mail">
                <div class="container">
                    <div class="contact-form">
                        <form action="{{ route('category.store') }}" method="post" id="formProduct" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" required minlength="2" value="" />
                            <div class="fields-grid">
                                <div class="row justify-content-center">
                                    <div class="styled-input agile-styled-input-top col-7 input-create-category">
                                        <input type="text" name="description" required id="name" value="{{ $category != null ? $category->description : ' ' }}">
                                        <input type="hidden" name="id" required id="id" value="{{ $category != null ? $category->id : ' ' }}">
                                        <label for="name">Nome</label>
                                        <span></span>
                                    </div>
                                    <div class="col-4">
                                        <input type="submit" id="criar" value="Criar" class="btn-create-category">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end input -->

            <!-- lista categoria -->
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    @foreach($categories as $category)

                        <li role="presentation">
                            <a href="{{ route('category.edit', ['category' => $category->slug]) }}" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">{{ $category->description }}</a>
                            <a href="{{ route('category.destroy', ['category' => $category->id]) }}" class="category-delete-link"><i class="fa fa-trash" id="category-delete"></i></a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- end lista cateoria -->
    </div>
@endsection
