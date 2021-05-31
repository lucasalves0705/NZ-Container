@extends('layout.admin')

@section('content')
<div class="contact" id="mail">
    <div class="container">
        <div class="w3l-heading">
            <h3>Novo Produto</h3>
        </div>
        <div class="contact-form">
            <h4>criar novo produto</h4>
            <form action="{{ route('product.store') }}" method="post" id="formProduct" enctype="multipart/form-data">
                @csrf
                <div class="img-responsive text-center img-product">
                    @if($product->images != null)
                            <div class="edit-img-product">
                                <img src="{{ asset('storage/'.$product->images->first()->path) }}" alt="{{ $product->description }}" title="{{ $product->name }}">
                                <span class="edit-img-product-span">Editar <i class="fa fa-edit"></i></span>
                            </div>
                    @else
                        <label for="exampleFormControlFile1">Inserir imagem</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    @endif
                </div>
                <input type="hidden" name="id" required minlength="2" value="{{ $product->id ?? '' }}" />
                <div class="fields-grid">
                    <div class="row">
                        <div class="styled-input agile-styled-input-top col-5">
                            <input type="text" name="name" required id="name" value="{{ $product->name ?? '' }}">
                            <label>Nome</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top col-5">
                            <input type="text" name="price" required id="price" value="{{ $product->price ?? '' }}">
                            <label>Preço</label>
                            <span></span>
                        </div>
                    </div>
                    <div class="row">
                    <div class="styled-input textarea-grid">
                        <textarea name="description" required rows="3" id="description">{{ $product->description ?? '' }}</textarea>
                        <label>Descrição</label>
                        <span></span>
                    </div>
                    </div>
                    <div class="row">
                        <div class="styled-input">
                            <span class="text-secondary px-1">Categoria</span>
                            <select class="form-select" aria-label="Default select example" name="category_id" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($product->category_id) && ($product->category_id == $category->id) ? 'selected' : ''}}>
                                        {{ $category->description }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="styled-input">
                            <span class="text-secondary px-1">Evento</span>
                            <select class="form-select" aria-label="Default select example" name="product_event_id" required>
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}" {{ isset($product->product_event_id) && ($product->product_event_id == $event->id) ? 'selected' : ''}}>
                                        {{ $event->description }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkstatus" name="status_id" {{ isset($product->status_id) && ($product->status_id == 1) ? 'checked' : ''}}>
                        <label class="form-check-label" for="checkstatus">Ativo</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        @if(isset($product))
                            <input type="submit" id="alterar" value="Alterar">
                        @else
                            <input type="submit" id="criar" value="Criar">
                        @endif
                    </div>
                    <div class="col-md-2">
                        @if(isset($product))
                            <input type="button" id="delete" value="Apagar">
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
