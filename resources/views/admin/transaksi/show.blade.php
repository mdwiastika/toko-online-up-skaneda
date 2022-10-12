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
        <div class="col-md-12 m-auto">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST">
                @csrf
              <div class="card-body">
                <table id="example1" class="table table-striped">
                    <tr>
                        <td>Kode Invoice</td>
                        <td><b>{{ $transaksi->kode_invoice ? $transaksi->kode_invoice : '-' }}</b></td>
                    </tr>
                    <tr>
                        <td>Tanggal Transaksi</td>
                        <td><b>{{ $transaksi->tanggal_transaksi ? $transaksi->tanggal_transaksi : '-' }}</b></td>
                    </tr>       
                    <tr>
                        <td>Status Transaksi</td>
                        <td><b>{{ $transaksi->status_transaksi ? $transaksi->status_transaksi : '-' }}</b></td>
                    </tr>
                    <tr>
                        <td>Nama Pembeli</td>
                        <td><b>{{ $users->nama_lengkap ? $users->nama_lengkap : '-' }}</b></td>
                    </tr>
                    <tr>
                        <td>Alamat Tujuan</td>
                        <td><b>{{ $users->alamat_lengkap ? $users->alamat_lengkap : '-' }}, 
                            {{ $kabupaten ? $kabupaten : '-' }}, {{ $provinsi ? $provinsi : '-' }}, {{ $users->kode_pos ? $users->kode_pos : '-' }}
                        </b></td>
                    </tr>
                    <tr>
                        <td>Ekspedisi</td>
                        <td><b>{{ $transaksi->ekspedisi ? $transaksi->ekspedisi : '-' }}</b></td>
                    </tr>
                    <tr>
                        <td>Catatan Pembeli</td>
                        <td><b>{{ $transaksi->catatan_pembeli ? $transaksi->catatan_pembeli : '-' }}</b></td>
                    </tr>
                    <tr>
                        <td>Total Jumlah Harga</td>
                        <td><b class="text-danger">Rp {{ $total_jumlah_transaksi ? number_format($total_jumlah_transaksi, 0, '.', ',') : '-' }}</b></td>
                    </tr>
                </table>
                <div class="col-lg-12">
                    <h4>List Produk</h4>
                    <div class="row">
                        @foreach ($transaksi->transaksi_detail as $transaksi_detail)
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('/storage/'.$transaksi_detail->produk->foto_produk) }}" class="w-100" alt="" srcset="">
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="p-2">
                                            <h5>{{ $transaksi_detail->produk->nama_produk }} <span class="float-right text-danger">Rp {{ $transaksi_detail->produk->harga_produk ? number_format($transaksi_detail->produk->harga_produk, 0, '.', ',') : '-' }}</span></h5>
                                            <p>Qty ({{ $transaksi_detail->qty }} X {{ number_format($transaksi_detail->produk->harga_produk, 0, '.', ',') }})<span class="float-right text-danger">Rp {{ $total_jumlah_transaksi ? number_format($transaksi_detail->produk->harga_produk, 0, '.', ',') : '-' }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/transaksi" class="btn btn-primary">Kembali</a>
                @if ($transaksi->status_transaksi == 'Pending' || $transaksi->status_transaksi == 'Selesai')
                  <a href="/transaksi/tolak/{{ $transaksi->id }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menolak transaksi ini?')">Tolak</a>
                @if ($transaksi->status_transaksi == 'Pending')
                  <a href="/transaksi/proses/{{ $transaksi->id }}" class="btn btn-danger" onclick="return confirm('Yakin ingin memproses transaksi ini?')">Proses</a>
                @endif
                @elseif($transaksi->status_transaksi == 'Proses Admin')
                  <a href="/transaksi/kirim/{{ $transaksi->id }}" class="btn btn-danger" onclick="return confirm('Yakin ingin mengirim transaksi ini?')">Kirim</a>
                @elseif($transaksi->status_transaksi == 'Pengiriman')
                <a href="/transaksi/selesai/{{ $transaksi->id }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menyelesaikan transaksi ini?')"></a>
                @endif
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