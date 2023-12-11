@extends('master2')
@section('judulhalaman', 'Data Shopping')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Shopping</h3>

    <a href="/shoppingchart/tambahshopping" class="btn btn-primary"> + Tambah Belanja</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>id</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($shoppingchart as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{number_format ($p->Harga, 0, ',', '.') }}</td>
            <td>{{number_format ($p->Jumlah*$p->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/shoppingchart/hapusshopping/{{ $p->id }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $pegawai->links() }} --}}
@endsection


