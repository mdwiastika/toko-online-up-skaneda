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
            <form>
                @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="fullname" value="{{ old('nama_lengkap') ? old('nama_lengkap') : $user->nama_lengkap }}" placeholder="Enter fullname" required disabled>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ old('username') ? old('username') : $user->username }}" placeholder="Enter username" required disabled>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ old('email') ? old('email') : $user->email  }}" placeholder="Enter email" required disabled>
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ old('password') ? old('password') : $user->password }}" placeholder="Password">
                </div> --}}
                <div class="form-group">
                    <label for="no_telp">No Telephone</label>
                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{ old('no_telp') ? old('no_telp') : $user->no_telp }}" placeholder="Enter No Telephone" required disabled>
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <select name="provinsi_id" id="provinsi" class="form-control select2 select2-danger" style="width: 100%;" onchange="getKabupaten()">
                        <option value="">-- Pilih Provinsi --</option>
                        @foreach ($provinsis as $key => $provinsi)
                            <option value="{{ $provinsi->id_provinsi }}" {{($provinsi->id_provinsi == $user->provinsi_id ? 'selected' : '')}}>{{ $provinsi->nama_provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <select name="kabupaten_id" id="kabupaten" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                        <option value="">-- Pilih Kabupaten --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" value="{{ old('kode_pos') ? old('kode_pos') : $user->kode_pos }}" id="kode_pos" placeholder="Enter kode pos" required disabled>
                </div>
                <div class="form-group">
                    <label for="alamat_lengkap">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="alamat_lengkap" value="{{ old('alamat_lengkap') ? old('alamat_lengkap') : $user->alamat_lengkap }}" id="alamat_lengkap" placeholder="Enter address" required disabled>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="/datamaster/users" class="btn btn-primary">Kembali</a>
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
      <script>
        $(document).ready(()=>{
            getKabupaten()
        })
        function getKabupaten(){
            let id_provinsi = $('#provinsi').val();
            if (id_provinsi) {
                $.post(`/get-kabupaten/${id_provinsi}`).done((data)=>{
                    if (data.status == 'success') {
                        let html = `<option value="">-- Pilih Kabupaten --</option>`
                        data.data.forEach((v,i) => {
                            html += `<option value="${v.id_kabupaten}" ${(v.id_kabupaten == "{{ $user->kabupaten_id }}") ? 'selected' : ''}>${v.nama_kabupaten}</option>`
                        });
                       $('#kabupaten').html(html)
                    }else{
                        toastr.error('Provinsi tidak boleh kosong')
                    }
                })
            }
        }
      </script>
  @endsection
@endsection