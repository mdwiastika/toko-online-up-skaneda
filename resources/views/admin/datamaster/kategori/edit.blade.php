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
            <form action="/datamaster/kategori-produk/{{ $kategori->id }}" method="POST">
                @method('PUT')
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="nama_kategori_produk">Nama Kategori Produk</label>
                    <input type="text" class="form-control" name="nama_kategori_produk" id="nama_kategori_produk" value="{{ old('nama_kategori_produk') ? old('nama_kategori_produk') : $kategori->nama_kategori_produk }}" placeholder="Masukkan Nama" required>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datamaster/kategori-produk" class="btn btn-primary">Kembali</a>
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