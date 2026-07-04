@extends('layouts.app')

@section('content')

<div class="card shadow">

    <img
        src="{{ asset($cat['gambar']) }}"
        class="card-img-top"
        style="height:450px; object-fit:cover;"
        alt="{{ $cat['nama'] }}"
    >

    <div class="card-body">

        <h2>{{ $cat['nama'] }}</h2>

        <p>
            <strong>Asal:</strong>
            {{ $cat['asal'] }}
        </p>

        <p>
            {{ $cat['deskripsi'] }}
        </p>

        <a href="/cats" class="btn btn-secondary">
            Kembali
        </a>

    </div>

</div>

@endsection