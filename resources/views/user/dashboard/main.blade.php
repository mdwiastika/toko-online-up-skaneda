@extends('user.layout.app')
@section('content')
<div class="container">
    <div class="intro-slider-container slider-container-ratio mb-2">
        <div class="intro-slider owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
            <div class="intro-slide">
                <figure class="slide-image">
                    <picture>
                        <source media="(max-width: 480px)" srcset="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-1-480w.jpg') }}">
                        <img src="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-1.jpg') }}" alt="Image Desc">
                    </picture>
                </figure><!-- End .slide-image -->

                <div class="intro-content">
                    <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Sneakers & Athletic Shoes</h1><!-- End .intro-title -->

                    <div class="intro-price text-white">from $9.99</div><!-- End .intro-price -->

                    <a href="category.html" class="btn btn-white-primary btn-round">
                        <span>SHOP NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide">
                <figure class="slide-image">
                    <picture>
                        <source media="(max-width: 480px)" srcset="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-2-480w.jpg') }}">
                        <img src="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-2.jpg') }}" alt="Image Desc">
                    </picture>
                </figure><!-- End .slide-image -->

                <div class="intro-content">
                    <h3 class="intro-subtitle">Trending Now</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">This Week's Most Wanted</h1><!-- End .intro-title -->

                    <div class="intro-price text-white">from $49.99</div><!-- End .intro-price -->

                    <a href="category.html" class="btn btn-white-primary btn-round">
                        <span>SHOP NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide">
                <figure class="slide-image">
                    <picture>
                        <source media="(max-width: 480px)" srcset="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-3-480w.jpg') }}">
                        <img src="{{ asset('/template-user/assets/images/demos/demo-10/slider/slide-3.jpg" alt="Image Desc') }}">
                    </picture>
                </figure><!-- End .slide-image -->

                <div class="intro-content">
                    <h3 class="intro-subtitle text-white">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                    <h1 class="intro-title text-white">Can’t-miss Clearance:</h1><!-- End .intro-title -->

                    <div class="intro-price text-white">starting at 60% off</div><!-- End .intro-price -->

                    <a href="category.html" class="btn btn-white-primary btn-round">
                        <span>SHOP NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->
        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->
</div><!-- End .container -->


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">
            <div class="banner banner-cat">
                <a href="#">
                    <img src="{{ asset('') }}/template-user/assets/images/demos/demo-10/banners/banner-5.jpg" alt="Banner">
                </a>

                <div class="banner-content banner-content-overlay text-center">
                    <h3 class="banner-title font-weight-normal">Laptop</h3><!-- End .banner-title -->
                    <h4 class="banner-subtitle">125 Products</h4><!-- End .banner-subtitle -->
                    <a href="category.html" class="banner-link">SHOP NOW</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->

        <div class="col-sm-6 col-md-4">
            <div class="banner banner-cat">
                <a href="#">
                    <img src="{{ asset('') }}/template-user/assets/images/demos/demo-10/banners/banner-6.jpg" alt="Banner">
                </a>

                <div class="banner-content banner-content-overlay text-center">
                    <h3 class="banner-title font-weight-normal">Handphone</h3><!-- End .banner-title -->
                    <h4 class="banner-subtitle">97 Products</h4><!-- End .banner-subtitle -->
                    <a href="category.html" class="banner-link">SHOP NOW</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->

        <div class="col-sm-6 col-md-4">
            <div class="banner banner-cat">
                <a href="#">
                    <img src="{{ asset('') }}/template-user/assets/images/demos/demo-10/banners/banner-7.jpg" alt="Banner">
                </a>

                <div class="banner-content banner-content-overlay text-center">
                    <h3 class="banner-title font-weight-normal">Aksesoris Laptop</h3><!-- End .banner-title -->
                    <h4 class="banner-subtitle">48 Products</h4><!-- End .banner-subtitle -->
                    <a href="category.html" class="banner-link">SHOP NOW</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
</div><!-- End .container --> --}}

<div class="mb-4"></div><!-- End .mb-4 -->

<div class="container">
    <div class="heading heading-center mb-3">
        <h2 class="title-lg mb-2">PENJUALAN PRODUK TERATAS</h2><!-- End .title-lg text-center -->

        <ul class="nav nav-pills justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
            </li>
            @foreach ($kategoris as $kategori)    
            <li class="nav-item">
                <a class="nav-link" id="top-{{ $kategori->nama_kategori_produk }}" data-toggle="tab" href="#top-{{ $kategori->id }}" role="tab" aria-controls="top-{{ $kategori->id }}" aria-selected="false">{{ $kategori->nama_kategori_produk }}</a>
            </li>
            @endforeach
        </ul>
    </div><!-- End .heading -->

    <div class="tab-content">
        <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
            <div class="products just-action-icons-sm">
                <div class="row">
                    @foreach ($produks as $produk)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">New</span>
                                <a href="product.html">
                                    <img src="{{ asset('/storage/'.$produk->foto_produk) }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{ $produk->kategori->nama_kategori_produk }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{ $produk->nama_produk }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Rp {{ number_format($produk->harga_produk, 0, '.', ',') }}
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <span class="ratings-text">Stok: {{ $produk->stok_produk }}</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <form action="/add-to-cart" style="margin: auto" method="POST" >
                                        @csrf
                                        <div style="text-align: center">
                                            <input type="hidden" name="id" value="{{ $produk->id }}">
                                            <a href="/produk/{{ $produk->slug_produk }}" class="btn-product btn-quickview" style="display: inline" title="Quick view"><span>quick view</span></a>
                                            <button type="submit" class="btn-product btn-cart" style="background-color: transparent; border: none; display: inline;" title="Add to cart"><span>add to cart</span></button>
                                        </div>
                                    </form>
                                    {{-- <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a> --}}
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                    @endforeach
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        @foreach ($kategoris as $kategori)     
        <div class="tab-pane p-0 fade" id="top-{{ $kategori->id }}" role="tabpanel" aria-labelledby="top-{{ $kategori->nama_kategori_produk }}">
            <div class="products just-action-icons-sm">
                <div class="row">
                    @foreach ($kategori->produk as $produk)
                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                        <div class="product product-3 text-center">
                            <figure class="product-media">
                                <span class="product-label label-primary">New</span>
                                <a href="product.html">
                                    <img src="{{ asset('/storage/'.$produk->foto_produk) }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{ $produk->kategori->nama_kategori_produk }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{ $produk->nama_produk }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    Rp {{ number_format($produk->harga_produk, 0, '.', ',') }}
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->

                            <div class="product-footer">
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 7 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <form action="/add-to-cart" style="margin: auto" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $produk->id }}">
                                        <a href="/produk/{{ $produk->slug_produk }}" class="btn-product btn-quickview" style="display: inline" title="Quick view"><span>quick view</span></a>
                                        <button type="submit" class="btn-product btn-cart" style="background-color: transparent; border: none; display: inline" title="Add to cart"><span>add to cart</span></button>
                                    </form>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-footer -->
                        </div><!-- End .product -->
                    </div><!-- End .col-6 col-md-4 col-lg-3 -->
                    @endforeach
                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- .End .tab-pane -->
        @endforeach
    </div><!-- End .tab-content -->

    <div class="more-container text-center mt-5">
        <a href="category.html" class="btn btn-outline-lightgray btn-more btn-round"><span>Lihat Produk Lainnya</span><i class="icon-long-arrow-right"></i></a>
    </div><!-- End .more-container -->
</div><!-- End .container -->

<div class="mb-5"></div><!-- End .mb5 -->
@endsection