@extends('master2')
@section('judulhalaman', 'Data Sepeda')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Sepeda</h3>

	<a href="/sepeda"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepeda as $p)
	<form action="/sepeda/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodesepeda }}"> <br/>
        <div class="form-group row">
            <label for="merksepeda" class="col-sm-1 control-label">Merk Sepeda</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="merksepeda" name="merksepeda" required value="{{ $p->merksepeda }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="stocksepeda" class="col-sm-1 control-label">Stock Sepeda</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="stocksepeda" name="stocksepeda" required value="{{ $p->stocksepeda }}" >
            </div>
        </div>

        {{-- <div class="form-group row">
            <label for="tersedia" class="col-sm-1 control-label">Tersedia</label>
            <div class="col-sm-9">
            <select class="form-control" id = "tersedia" name="tersedia">
                <option value = "Y">Ya</option>
                <option value = "N">Tidak</option>
            </select>
            </div>
        </div> --}}



		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
