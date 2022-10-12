@extends('admin.layout.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{ $title }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 m-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/transaksi" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="user_id">Pembeli Produk</label>
                   <select name="user_id" id="user_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option value="">-- Pilih Pengguna --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama_lengkap }}</option>
                        @endforeach
                   </select>
                </div>
                    <div class="form-group">
                        <label for="produk_id">Nama Produk</label>
                       <select name="produk_id" id="produk_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        <option value="">-- Pilih Produk --</option>
                            @foreach ($produks as $produk)
                                <option value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                            @endforeach
                       </select>
                    </div>
                <div class="form-group">
                    <label for="tanggal_transaksi">Tanggal Transaksi</label>
                    <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}" placeholder="Masukkan Stok" required>
                </div>
                <div class="form-group">
                    <label for="ekspedisi">Pilih Ekspedisi</label>
                    <select name="ekspedisi" id="ekspedisi" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        <option value="">-- Pilih Ekspedisi --</option>
                        <option value="jne">JNE</option>
                        <option value="jnt">JNT</option>
                        <option value="pos">POS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="catatan_pembeli">Catatan Pembeli</label>
                    <textarea name="catatan_pembeli" id="catatan_pembeli" cols="30" rows="3" required class="form-control"></textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/transaksi" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  @section('script')
  @endsection
@endsection