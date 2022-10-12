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
               <form action="/laporan/laporan-penjualan" method="GET">
                    <div class="row mb-4">
                        <div class="col">
                            Range Tanggal
                        </div>
                        <div class="col-4">
                            <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" value="{{ isset($_GET['tanggal_awal']) }}">
                        </div>
                        <div class="col-0">
                            -
                        </div>
                        <div class="col-4">
                            <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" value="{{ isset($_GET['tanggal_akhir']) }}">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button>
                            <a class="btn btn-warning text-white" onclick="print()"><i class="fa fa-print"></i> Print</a>
                        </div>
                    </div>
                </form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                  <th>Kode Invoice</th>
                  <th>Nama Pembeli</th>
                  <th>Produk</th>
                  <th>QTY</th>
                  <th>Tanggal Transaksi</th>
                  <th>Status transaksi</th>
                  <th>Alamat Tujuan</th>
                  <th>Ekspedisi</th>
                  <th>Catatan Pembeli</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($laporan_penjualan as $key => $transaksi)    
                    <tr>
                      <td>{{ ($key+1) }}</td>
                      <td>{{ $transaksi->kode_transaksi }}</td>
                      <td>{{ $transaksi->kode_invoice }}</td>
                      <td>{{ $transaksi->users->nama_lengkap }}</td>
                      <td>
                        <ol>
                            @foreach ($transaksi->transaksi_detail as $td)
                                <li>{{ $td->produk->nama_produk }}</li>
                            @endforeach
                        </ol>
                      </td>
                      <td>
                        <ul>
                            @foreach ($transaksi->transaksi_detail as $td)
                                <li>{{ $td->qty }}</li>
                            @endforeach
                        </ul>
                      </td>
                      <td>{{ $transaksi->tanggal_transaksi }}</td>
                      <td>{{ $transaksi->status_transaksi }}</td>
                      <td>{{ $transaksi->users->alamat_lengkap ? $transaksi->users->alamat_lengkap : '-' }}, 
                        {{ $transaksi->kabupaten->nama_kabupaten ? $transaksi->kabupaten->nama_kabupaten : '-' }}, {{ $transaksi->provinsi->nama_provinsi ? $transaksi->provinsi->nama_provinsi : '-' }}, {{ $transaksi->users->kode_pos ? $transaksi->users->kode_pos : '-' }}</td>
                      <td>{{ $transaksi->ekspedisi }}</td>
                      <td>{{ $transaksi->catatan_pembeli }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                  <th>Kode Invoice</th>
                  <th>Nama Pembeli</th>
                  <th>Produk</th>
                  <th>QTY</th>
                  <th>Tanggal Transaksi</th>
                  <th>Status transaksi</th>
                  <th>Alamat Tujuan</th>
                  <th>Ekspedisi</th>
                  <th>Catatan Pembeli</th>
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

    // $('#example1').DataTable();
    function print() {
        let tanggal_awal = $('#tanggal_awal').val();
        let tanggal_akhir = $('#tanggal_akhir').val();
        window.open(`{{ route('printLaporan') }}?tanggal_awal=${tanggal_awal}&tanggal_akhir=${tanggal_akhir}`, '_blank');
    }
  </script>
  @endsection
@endsection