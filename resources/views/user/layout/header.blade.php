<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                <li><a href="tel:#"><i class="icon-whatsapp"></i> +62 896 9159 5159</a></li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-dropdown">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>
                                @if (Auth::check())
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" style="background-color: transparent; border: none"><i class="icon-user"></i>LOGOUT</button>
                                </form>
                                <li><a href="/history" class="text-dark"><i class="icon-home"></i>HISTORY</a></li>
                                @else
                                <li><a href="/login"><i class="icon-user"></i>LOGIN</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="/user/dashboard" class="logo">
                    <img src="{{ asset('/template-user/assets/images/logo.png') }}" alt="Molla Logo" width="105" height="25">
                </a>
                
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li>
                            <a href="product.html" class="sf-with-ul">Kategori</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Kategori Produk</div><!-- End .menu-title -->
                                            <ul>
                                                <li><a href="category-list.html">Laptop</a></li>
                                                <li><a href="category-list.html">Handphone</a></li>
                                                <li><a href="category-list.html">Aksesoris Laptop</a></li>
                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">

                <div class="dropdown cart-dropdown">
                    @if (Auth::check())
                        @php
                            $keranjang = DB::table('keranjangs as k')->where('user_id', auth()->user()->id)->join('produks as p', 'p.id', 'k.produk_id')->get();
                            $keranjang_limit = DB::table('keranjangs as k')->where('user_id', auth()->user()->id)->join('produks as p', 'p.id', 'k.produk_id')->limit(3)->get();
                            $total = DB::table('keranjangs as k')->selectRaw("SUM(p.harga_produk * k.qty) as jumlah")->where('user_id', auth()->user()->id)->join('produks as p', 'p.id', 'k.produk_id')->first()->jumlah;
                        @endphp
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">{{ count($keranjang) }}</span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                @if (count($keranjang) > 0) 
                                @foreach ($keranjang as $ker)    
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">{{ $ker->nama_produk }}</a>
                                        </h4>
    
                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">{{ $ker->qty }}</span>
                                            x  Rp {{ number_format($ker->harga_produk, 0, '.', ',') }}
                                        </span>
                                    </div><!-- End .product-cart-details -->
    
                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="{{ asset('/storage/'. $ker->foto_produk) }}" alt="product">
                                        </a>
                                    </figure>
                                    <form action="/remove-to-cart" method="GET">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $ker->produk_id }}">
                                        <button type="submit" class="btn-remove" title="Remove Product"><i class="icon-close"></i></button>
                                    </form>
                                </div><!-- End .product -->
                                @endforeach   
                                @else
                                    <div>tidak ada produk</div>
                                @endif
                            </div><!-- End .cart-product -->
    
                            <div class="dropdown-cart-total">
                                <span>Total</span>
    
                                <span class="cart-total-price">Rp {{ number_format($total, 0, '.', ',')  }}</span>
                            </div><!-- End .dropdown-cart-total -->
    
                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-primary">Keranjang</a>
                                <a href="/checkout" class="btn btn-outline-primary-2"><span>Beli</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    @endif
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->