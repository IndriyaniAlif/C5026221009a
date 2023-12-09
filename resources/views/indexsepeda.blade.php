@extends('master2')
@section('judulhalaman', 'Data Sepeda')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Sepeda</h3>

	<a href="/sepeda/tambahsepeda" class="btn btn-primary"> + Tambah Sepeda</a>

	<br/>
    <p>Cari Data Sepeda :</p>
	<form action="/sepeda/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Jenis Sepeda .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sepeda</th>
			<th>Merk Sepeda</th>
			<th>Stock Sepeda</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepeda as $p)
		<tr>
			<td>{{ $p->kodesepeda }}</td>
			<td>{{ $p->merksepeda }}</td>
			<td>{{ $p->stocksepeda }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/sepeda/viewsepeda/{{ $p->kodesepeda }}" class="btn btn-success">View</a>
				|
                <a href="/sepeda/editsepeda/{{ $p->kodesepeda }}" class="btn btn-warning">Edit</a>
                |
				<a href="/sepeda/hapussepeda/{{ $p->kodesepeda }}" class="btn btn-danger">Hapus</a>

                {{-- @if ($p->stocksepeda > 0)
                        Y
                    @else ($p->stocksepeda = 0)
                        N --}}
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $sepeda->links() }} --}}
@endsection


