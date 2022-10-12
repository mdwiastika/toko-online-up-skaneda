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
                <a href="/transaksi/create" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah Produk</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                  <th>Kode Invoice</th>
                  <th>Nama Pembeli</th>
                  <th>Tanggal Transaksi</th>
                  <th>Status transaksi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transaksis as $key => $transaksi)    
                    <tr>
                      <td>{{ ($key+1) }}</td>
                      <td>{{ $transaksi->kode_transaksi }}</td>
                      <td>{{ $transaksi->kode_invoice }}</td>
                      <td>{{ $transaksi->users->nama_lengkap }}</td>
                      <td>{{ $transaksi->tanggal_transaksi }}</td>
                      <td>{{ $transaksi->status_transaksi }}</td>
                      <td>
                        <a href="/transaksi/{{ $transaksi->id }}" class="btn btn-warning btn-sm text-white"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Kode Invoice</th>
                    <th>Nama Pembeli</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status transaksi</th>
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