@extends('layout.admin')

@section('content')
    <div class="gallery" id="menu">
        <div class="container">
            <div class="w3l-heading">
                <h3>Lista de Produtos</h3>
            </div>
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    @foreach($categories as $category)
                        <li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">{{ $category->description }}</a></li>
                    @endforeach

                    <!--
                    <li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">All</a></li>
                    <li role="presentation"><a href="#learning" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Category 1</a></li>
                    <li role="presentation"><a href="#playing" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Category 2</a></li>
                    <li role="presentation"><a href="#painting" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Category 3</a></li>
                    <li role="presentation"><a href="#school" role="tab" id="school-tab" data-toggle="tab" aria-controls="school">Category 4</a></li>
                    -->
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home-main" aria-labelledby="home-tab">
                        <div class="w3_tab_img">
                            @foreach($products as $product)
                                <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="{{ route('product.edit', ['product' => $product->id]) }}">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g1.jpg" alt="{{ $product->description }}" class="img-responsive" />
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>{{ $product->name }}</h5>
                                    <span class="text-end">{{ $product->price }}</span>
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="learning" aria-labelledby="learning-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g2.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Vivamus</h5>
                                    <p>Eleifend</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g3.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Cras</h5>
                                    <p>Pulvinar</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="playing" aria-labelledby="playing-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g4.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g4.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Maecenas</h5>
                                    <p>Blandit</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g5.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g5.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Sodales</h5>
                                    <p>Vivamus</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g6.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g6.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Vivamus</h5>
                                    <p>Eleifend</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g7.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g7.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Maecenas</h5>
                                    <p>Blandit</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="painting" aria-labelledby="painting-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g1.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g1.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Morbi</h5>
                                    <p>Ornare </p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g2.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g2.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Cras</h5>
                                    <p>Pulvinar</p>
                                </div>
                            </div>
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g3.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g3.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Donec</h5>
                                    <p>Vulputate</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="school" aria-labelledby="school-tab">
                        <div class="w3_tab_img">
                            <div class="col-sm-3 w3_tab_img_left">
                                <div class="demo">
                                    <a class="cm-overlay" href="images/g4.jpg">
                                        <figure class="imghvr-shutter-in-out-diag-2"><img src="images/g4.jpg" alt=" " class="img-responsive">
                                        </figure>
                                    </a>
                                </div>
                                <div class="agile-gallery-info">
                                    <h5>Lorem</h5>
                                    <p>Consectetur</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
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
