@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Barang</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store2" method="post" class="form-horizontal">
		{{ csrf_field() }}


        <div class="form-group row">
            <label for="kodebarang" class="col-sm-2 control-label">Kode Barang</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlahpembelian" class="col-sm-2 control-label">Jumlah Pembelian</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>

        <div class="form-group row">
            <label for="hargaperitem" class="col-sm-2 control-label">Harga Per Item</label>
            <div class="col-sm-9">
            <textarea type="number" class="form-control" id="Harga" name="Harga"></textarea>
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection


