@extends('master2')
@section('judulhalaman', 'View Karyawan')

@section('konten')



<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3 class="text-conter">View Karyawan</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
    <div class="col-8 d-flex flex-column m-3"
    @foreach($latihan as $p)
            <input type="hidden" name="id" value="{{ $p->kodepegawai }}">
            {{-- <p>Kode Pegawai: {{ $p->kodepegawai }}</p> --}}
            <p>Nama Lengkap: {{ strtoupper($p->namalengkap) }}</p>
            <p>Divisi: {{ $p->divisi }}</p>
            <p>Departemen: {{ strtolower($p->departemen) }}</p>

    <div class ="d-flex justify-content-between align-item-center">
            <a href="/latihan" class="btn btn-info">Kembali</a>
    </div>
     @endforeach



    </div>
    </div>
</div>
@endsection

