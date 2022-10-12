@extends('user.layout.app')
@section('content')
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Pembayaran</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<form action="{{ route('prosesCheckout') }}" method="POST">
                            @csrf
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Detail Pembayaran</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Nama Lengkap *</label>
		                						<input type="text" class="form-control" value="{{ $user->nama_lengkap }}" name="nama_lengkap" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Username *</label>
		                						<input type="text" class="form-control" value="{{ $user->username }}" name="username" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Alamat Lengkap *</label>
                                        <textarea class="form-control" cols="30" rows="5" placeholder="Nama Jalan, Desa / Perkiraan" name="alamat_lengkap" required>{{ $user->alamat_lengkap }}</textarea>

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Provinsi *</label>
		                						<input type="text" class="form-control" value="{{ $provinsi->nama_provinsi }}" name="provinsi" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Kabupaten *</label>
		                						<input type="text" class="form-control" name="kabupaten" value="{{ $kabupaten->nama_kabupaten }}" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Kode Pos *</label>
		                						<input type="text" class="form-control" value="{{ $user->kode_pos }}" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>No HP *</label>
		                						<input type="tel" class="form-control" value="{{ $user->no_telp }}" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
                                        <label for="">Pengiriman *</label>
                                        <select name="ekspedisi" id="" class="form-control" required>
                                            <option value="-">-- Pilih Pengiriman --</option>
                                            <option value="jne">JNE</option>
                                            <option value="jnt">JNT</option>
                                            <option value="pos">POS</option>
                                        </select>

	                					<label>Email *</label>
	        							<input type="email" class="form-control" name="email" value="{{ $user->email }}" required>

	                					<label>Catatan Pembeli (opsional)</label>
	        							<textarea class="form-control" cols="30" rows="4" name="catatan_pembeli" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Detail Pesanan</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Produk</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
                                                @php
                                                    $total = DB::table('keranjangs as k')->selectRaw("SUM(p.harga_produk * k.qty) as jumlah")->where('user_id', auth()->user()->id)
                                                    ->join('produks as p', 'p.id', 'k.produk_id')->first()->jumlah;
                                                @endphp
                                                @foreach ($keranjangs as $keranjang)    
		                						<tr>
		                							<td><a href="#">{{ $keranjang->produk->nama_produk }}</a></td>
		                							<td>Rp. {{ number_format($keranjang->produk->harga_produk, 0, '.', ',') }} X {{ $keranjang->qty }}</td>
		                						</tr>
                                                @endforeach
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>Rp {{ number_format($total, 0, '.', ',') }}</td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Bayar Sekarang</span>
		                					<span class="btn-hover-text">Proses Pesanan</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
@endsection