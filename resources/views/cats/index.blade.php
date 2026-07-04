@extends('layouts.app')

@section('content')

<h2 class="mb-4 text-center">
    Daftar Jenis Kucing
</h2>

<div class="row">

@foreach($cats as $cat)

<div class="col-md-4 mb-4">

    <div class="card shadow h-100">

        <img
            src="{{ asset($cat['gambar']) }}"
            class="card-img-top"
            alt="{{ $cat['nama'] }}"
            style="height:250px; object-fit:cover;"
        >

        <div class="card-body">

            <h4>{{ $cat['nama'] }}</h4>

            <p><strong>Asal:</strong> {{ $cat['asal'] }}</p>

            <a
                href="/cats/{{ $cat['id'] }}"
                class="btn btn-warning"
            >
                Lihat Detail
            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection