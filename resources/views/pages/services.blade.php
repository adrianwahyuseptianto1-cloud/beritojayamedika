@extends('layouts.public')

@section('title', 'Layanan Kami')

@section('content')
    <div class="container">
        <h1>Layanan Kami</h1>
        <p>Ini adalah layanan yang kami tawarkan.</p>

        <div class="service-list">
            @forelse ($services as $service)
                <div class="service-item">
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            @empty
                <p>Belum ada layanan yang tersedia saat ini.</p>
            @endforelse
        </div>
    </div>
@endsection