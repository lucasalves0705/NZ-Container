@extends('layout.admin')

@section('content')
<div class="contact" id="mail">
    <div class="container">
        <div class="w3l-heading">
            <h3>Novo Produto</h3>
        </div>
        <div class="contact-form">
            <h4>criar novo produto</h4>
            <form action="#" method="post">
                <div class="fields-grid">
                    <div class="row">
                        <div class="styled-input agile-styled-input-top col-5">
                            <input type="text" name="name" required="" id="name">
                            <label>Nome</label>
                            <span></span>
                        </div>
                        <div class="styled-input agile-styled-input-top col-5">
                            <input type="text" name="price" required="" id="price">
                            <label>Preço</label>
                            <span></span>
                        </div>
                    </div>
                    <div class="row">
                    <div class="styled-input textarea-grid">
                        <textarea name="description" required="" rows="5" id="description"></textarea>
                        <label>Descrição</label>
                        <span></span>
                    </div>
                    </div>
                    <div class="row">
                        <div class="styled-input">
                            <select class="form-select" aria-label="Default select example">
                                <option>Bebidas</option>
                                <option>Laches</option>
                                <option>Massas</option>
                            </select>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <select class="form-select" aria-label="Default select example">
                                <option>Eventos</option>
                                <option value="1">Bebidas</option>
                                <option value="2">Laches</option>
                                <option value="3">Massas</option>
                            </select>
                            <span></span>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkstatus" name="status">
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
