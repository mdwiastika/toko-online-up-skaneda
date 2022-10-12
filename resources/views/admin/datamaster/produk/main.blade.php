@extends('admin.layout.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $title }}</h1>
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
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a href="/datamaster/produk/create" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah Produk</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Kategori Produk</th>
                  <th>Slug Produk</th>
                  <th>Berat Produk</th>
                  <th>Harga Produk</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($produks as $key => $produk)    
                    <tr>
                      <td>{{ ($key+1) }}</td>
                      <td>{{ $produk->nama_produk }}</td>
                      <td>{{ $produk->kategori->nama_kategori_produk }}</td>
                      <td>{{ $produk->slug_produk }}</td>
                      <td>{{ $produk->berat_produk }}</td>
                      <td>{{ $produk->harga_produk }}</td>
                      <td>
                        <a href="/datamaster/produk/{{ $produk->id }}" class="btn btn-warning btn-sm text-white"><i class="fa fa-eye"></i></a>
                        <a href="/datamaster/produk/{{ $produk->id }}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <form action="/datamaster/produk/{{ $produk->id }}" method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus user {{ $produk->nama_produk }}')"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori Produk</th>
                    <th>Slug Produk</th>
                    <th>Berat Produk</th>
                    <th>Harga Produk</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>    
  @section('script')
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endsection
@endsection