@extends('master')

@section('judulhalaman','Home')

@section('judul')
<div class="jumbutron">
    Ini Halaman Home
</div>
@endsection

@section('konten')
<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      @for ($i=1;$i<6;$i++)
      <tr>
        <td>No</td>
        <td>:</td>
        <td>{{ $i }}</td>
      </tr>
      @endfor
    </tbody>
</table>
<h3>Isi Halaman Tentang</h3>
@endsection
