@extends('layout.admin')

@section('content')
    <div class="gallery" id="menu">
        <div class="container">
            <div class="w3l-heading">
                <h3>Lista de Produtos</h3><a href="{{ route('product.create') }}"><i class="fa fa-plus-circle fa-2x btn-add-product"></i></a>
            </div>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">

                    <li role="presentation"
                        @if(!isset($categoryActive))
                            class="active"
                        @endif
                    ><a href="{{ route('product.index') }}" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Todas</a></li>

                    @foreach($categories as $category)

                            <li role="presentation"
                                @if(isset($categoryActive) && $categoryActive == $category->description)
                                    class="active"
                                @endif
                            ><a href="{{ route('productCategory', ['category' => $category->slug]) }}" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">{{ $category->description }}</a></li>
                    @endforeach
                    <li class="li-add-category">
                        <a href="{{ route('category.create') }}"><i class="fa fa-plus btn-add-category"></i></a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
                        <div class="w3_tab_img">
                            @foreach($products as $product)
                                <div class="col-sm-3 w3_tab_img_left">
                                    <a class="cm-overlay" href="{{ route('product.edit', ['product' => $product->id]) }}">
                                        <div class="demo">
                                               <figure class="imghvr-shutter-in-out-diag-2"><img src="{{ $product->images->count() > 0 ? asset('storage/'.$product->images->first()->path) : asset('storage/products/sem_img.png') }}" alt="{{ $product->description }}" class="img-responsive" />
                                               </figure>
                                        </div>
                                        <div class="agile-gallery-info">
                                            <h5>{{ $product->name }}</h5>
                                            <span class="text-end">{{ $product->price }}</span>
                                            <p>{{ $product->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                {{ $products->links() }}
            </div>
            <script src="js/jquery.tools.min.js"></script>
            <script src="js/jquery.mobile.custom.min.js"></script>
            <script src="js/jquery.cm-overlay.js"></script>
            <script>
                $(document).ready(function(){
                    $('.cm-overlay').cmOverlay();
                });
            </script>
        </div>
    </div>
@endsection
