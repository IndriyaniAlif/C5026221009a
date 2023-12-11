@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Karyawan</h3>

	<a href="/latihan"> Kembali</a>

	<br/>
	<br/>

	<form action="/latihan/storelatihan" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-1 control-label">Kode</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="kodepegawai" name="kodepegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-1 control-label">Nama Lengkap</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-1 control-label">Divisi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="divisi" name="divisi">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-1 control-label">Departemen</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="departemen" name="departemen">
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection


