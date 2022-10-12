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
            <form action="/datamaster/produk" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" value="{{ old('nama_produk') }}" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="kategori_produk_id">Kategori Produk</label>
                   <select name="kategori_produk_id" id="kategori_produk_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori_produk }}</option>
                        @endforeach
                   </select>
                </div>
                <div class="form-group">
                    <label for="stok_produk">Stok Produk</label>
                    <input type="number" class="form-control" name="stok_produk" id="stok_produk" value="{{ old('stok_produk') }}" placeholder="Masukkan Stok" required>
                </div>
                <div class="form-group">
                    <label for="berat_produk">Berat Produk (gram)</label>
                    <input type="number" class="form-control" name="berat_produk" id="berat_produk" value="{{ old('berat_produk') }}" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" class="form-control" name="harga_produk" id="harga_produk" value="{{ old('harga_produk') }}" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi_produk">Deskripsi Produk</label>
                    <input type="text" class="form-control" name="deskripsi_produk" id="deskripsi_produk" value="{{ old('deskripsi_produk') }}" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="foto_produk">Foto Produk</label>
                    <input type="file" class="form-control" name="foto_produk" id="foto_produk" value="{{ old('nama_produk') }}" placeholder="Masukkan Nama" required>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datamaster/users" class="btn btn-primary">Kembali</a>
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