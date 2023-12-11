@extends('master2')
@section('judulhalaman', 'Data Chat')

@section('konten')
    <h3>Data Chat</h3>

    @foreach ($chats as $chat)
        @php
            $words = explode(' ', $chat->pesan);
        @endphp

        @foreach ($words as $word)
            @switch($word)
                @case(':))')
                    <img src="{{ asset('1.png') }}" alt=":))">
                    @break
                @case(':3')
                    <img src="{{ asset('2.png') }}" alt=":3">
                    @break
                @case(':P')
                    <img src="{{ asset('3.png') }}" alt=":P">
                    @break
                @case(':C')
                    <img src="{{ asset('4.png') }}" alt=":C">
                    @break
                @case(';)')
                    <img src="{{ asset('5.png') }}" alt=";)">
                    @break
                @default
                    {{ $word }}
            @endswitch

            {{-- Add space after each word --}}
            &nbsp;
        @endforeach

        {{-- Add a line break after each chat --}}
        <br>
    @endforeach

@endsection
