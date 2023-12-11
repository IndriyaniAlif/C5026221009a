@extends('master2')
@section('judulhalaman', 'Data Nilai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai</h3>

	<a href="/latihanlagi"> Kembali</a>

	<br/>
	<br/>

	<form action="/latihanlagi/storelatihanlagi" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="normorinduksiswa" class="col-sm-1 control-label">Nomor Induk Siswa</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="normorinduksiswa" name="normorinduksiswa">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangkaa" class="col-sm-1 control-label">Nilai Angka</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="nilaiangkaa" name="nilaiangkaa">
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-1 control-label">SKS</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection


