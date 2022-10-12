@extends('user.layout.app')
@section('content')
<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Histori<span>Transaksi</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Checkout</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="container">
        <table class="table table-wishlist table-mobile">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @if (count($all_transaksi) > 0)          
                @foreach ($all_transaksi as $transaksis)
                    @foreach ($transaksis->transaksi_detail as $transaksi) 
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('/storage/'.$transaksi->produk->foto_produk) }}" alt="Product image">
                                    </a>
                                </figure>
    
                                <h3 class="product-title">
                                    <a href="#">{{ $transaksi->produk->nama_produk }}</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col text-danger">Rp {{ number_format($transaksi->produk->harga_produk, 0, '.', ',') }}</td>
                        @if ($transaksi->transaksi->status_transaksi == 'Pending')    
                            <td class="stock-col"><span class="in-stock text-warning">{{ $transaksi->transaksi->status_transaksi }}</span></td>
                        @elseif($transaksi->transaksi->status_transaksi == 'Selesai')
                            <td class="stock-col"><span class="in-stock text-success">{{ $transaksi->transaksi->status_transaksi }}</span></td>
                        @elseif($transaksi->transaksi->status_transaksi == 'Proses Admin')
                            <td class="stock-col"><span class="in-stock text-info">{{ $transaksi->transaksi->status_transaksi }}</span></td>
                        @elseif($transaksi->transaksi->status_transaksi == 'Pengiriman')
                            <td class="stock-col"><span class="in-stock text-info">{{ $transaksi->transaksi->status_transaksi }}</span></td>
                        @elseif($transaksi->transaksi->status_transaksi == 'Tolak')
                            <td class="stock-col"><span class="in-stock text-danger">{{ $transaksi->transaksi->status_transaksi }}</span></td>
                        @endif
                        <td class="action-col">
                            @if ($transaksi->transaksi->status_transaksi == 'Pengiriman')    
                            <form action="/history-complete" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $transaksis->id }}">
                            <button class="btn btn-block btn-outline-success" type="submit">
                                <i class="icon-check"></i>Ubah Menjadi Selesai
                            </button>
                        </form>
                            @else
                                <span class="text-info">Tidak Ada Aksi</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach   
                @endforeach
                @else
                    <tr>
                        <td colspan="4">Belum ada transaksi</td>
                    </tr>
                @endif
            </tbody>
        </table><!-- End .table table-wishlist -->
        <div class="wishlist-share">
            <div class="social-icons social-icons-sm mb-2">
                <label class="social-label">Share on:</label>
                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
            </div><!-- End .soial-icons -->
        </div><!-- End .wishlist-share -->
    </div><!-- End .container -->
</div><!-- End .page-content -->
@endsection