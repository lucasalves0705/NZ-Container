@extends('layout.admin')

@section('content')
<div class="contact" id="mail">
    <div class="container">
        <div class="w3l-heading">
            <h3>Novo Produto</h3>
        </div>
        <div class="contact-form">
            <h4>criar novo produto</h4>
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id ?? '' }}" />
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
                        <textarea name="description" required rows="5" id="description">{{ $product->description ?? '' }}</textarea>
                        <label>Descrição</label>
                        <span></span>
                    </div>
                    </div>
                    <div class="row">
                        <div class="styled-input">
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ isset($product->category_id) && ($product->category_id == $category->id) ? 'selected' : ''}}>
                                        {{ $category->description }}
                                    </option>
                                @endforeach
                            </select>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <select class="form-select" aria-label="Default select example" name="product_event_id">
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}" {{ isset($product->product_event_id) && ($product->product_event_id == $event->id) ? 'selected' : ''}}>
                                        {{ $event->description }}
                                    </option>
                                @endforeach
                            </select>
                            <span></span>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkstatus" name="status_id" {{ isset($product->status_id) && ($product->status_id == 1) ? 'checked' : ''}}>
                        <label class="form-check-label" for="checkstatus">Ativo</label>
                        <span></span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" value="Criar">
            </form>
        </div>
    </div>
</div>
@endsection
