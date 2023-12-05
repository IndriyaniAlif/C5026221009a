@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-sm-1 control-label">Nama</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama" required value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 control-label">Jabatan</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{ $p->pegawai_jabatan }}" >
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 control-label">Umur</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="umur" name="umur" required value="{{ $p->pegawai_umur}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-1 control-label">Alamat</label>
            <div class="col-sm-9">
            <textarea required="required" type="text" class="form-control" id="alamat" name="alamat">{{ $p->pegawai_alamat}}</textarea>
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
