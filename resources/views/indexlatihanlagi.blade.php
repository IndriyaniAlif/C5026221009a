@extends('master2')
@section('judulhalaman', 'Data Nilai')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai</h3>

	<a href="/latihanlagi/tambahlatihanlagi" class="btn btn-primary"> + Tambah Data Baru</a>

	<br/>
    <p>Cari Data Nilai :</p>
	<form action="/latihanlagi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Data Nilai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($latihanlagi as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->normorinduksiswa }}</td>
			<td>{{ $p->nilaiangkaa }}</td>
			<td>{{ $p->sks }}</td>
            <td>
                @if ($p->nilaiangkaa >= 81)
                    A
                @elseif ($p->nilaiangkaa >= 61)
                    B
                    @elseif ($p->nilaiangkaa >= 41)
                    C
                @else
                    D
                @endif
            </td>
            <td>{{ $p->nilaiangkaa * $p->sks }}</td>

		</tr>
		@endforeach
	</table>

    {{ $latihanlagi->links() }}
@endsection


