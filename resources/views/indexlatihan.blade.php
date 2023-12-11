@extends('master2')
@section('judulhalaman', 'Data Karyawan')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Karyawan</h3>

	{{-- <a href="/karyawan/tambahkaryawan" class="btn btn-primary"> + Tambah Karyawan Baru</a> --}}

	<br/>
    <p>Cari Data Pegawai :</p>
	<form action="/latihan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($latihan as $p)
		<tr>
            <td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper ($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ strtolower ($p->departemen) }}</td>
			<td>
				<a href="/latihan/viewlatihan/{{ $p->kodepegawai }}" class="btn btn-success">View</a>
				|
                <a href="/latihan/editlatihan/{{ $p->kodepegawai }}" class="btn btn-warning">Edit</a>

				{{-- <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a> --}}
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/latihan/tambahlatihan" class="btn btn-primary"> + Tambah Karyawan Baru</a>

    {{-- {{ $karyawan->links() }} --}}
@endsection


