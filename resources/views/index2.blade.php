@extends('master2')
@section('judulhalaman', 'Data Barang')

@section('konten')

	<h3>Keranjang Belanja</h3>

	<a href="/keranjangbelanja/tambah2" class="btn btn-primary"> + Beli</a>

	<br>
    {{-- <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{number_format ($p->Harga, 0, ',', '.') }}</td>
            <td>{{number_format ($p->Jumlah*$p->Harga, 0, ',', '.') }}</td>
			<td>

				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>


@endsection


