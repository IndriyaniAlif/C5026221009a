@extends('master2')
@section('judulhalaman', 'View Sepeda')

@section('konten')



<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3 class="text-conter">View Sepeda</h3>
<div class="container align-center">
    <div class="row bg-light d-flex align-item-center justify-content-center">
        <div class="col-2 d-flex justify-content-center m-3" style="border-style: solid">

        </div>
    <div class="col-8 d-flex flex-column m-3"
    @foreach($sepeda as $p)
            <input type="hidden" name="id" value="{{ $p->kodesepeda }}">
            <p>Merk Sepeda: {{ $p->merksepeda }}</p>
            <p>Stock Sepeda: {{ $p->stocksepeda }}</p>
            <p>Tersedia: {{ $p->tersedia }}</p>

    <div class ="d-flex justify-content-between align-item-center">
            <a href="/sepeda" class="btn btn-info">Kembali</a>
    </div>
     @endforeach



    </div>
    </div>
</div>
@endsection

