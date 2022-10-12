<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{ asset('/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
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
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/admin/dist/js/demo.js') }}"></script>
<script src="{{ asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('/admin/plugins/toastr/toastr.min.js') }}"></script>
@yield('script')
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  })
  @if(Session::has('status'))
        @if(Session::get('status') == 'success')
            toastr.success(`{{ Session::get('message') }}`)
        @else
        toastr.error(`{{ Session::get('message') }}`)
        @endif
    @endif
</script>
<script>
    window.print();
    window.onfocus=function(){window.close()}
</script>
</body>
</html>
