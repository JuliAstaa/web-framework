@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('layout')
@section('title', $title)

@section('navigation')
    @parent
    <a href="/product">Product </a>
@endsection

@section('content')
    <div class="flex">
        <div class="left-content w-1/4">
            <img src="{{ $product['urlphoto'] }}" alt="" class="object-contain mix-blend-multiply">
        </div>
        <div class="right-content w-3/4 px-8">
            <div>
                <div class="title">
                    <h1 class="text-2xl font-bold text-gray-800">{{ $product['nama'] }}</h1>
                </div>
                <div class="desc text-slate-900 mt-3">
                    <p>{{ $product['detail'] }}</p>
                </div>
                <div class="stock text-slate-900 mt-8">
                    @if ($product['stok'] > 0)
                        <p class="text-[#3E5F44] font-semibold">Stok {{ $product['stok'] }}</p>
                    @else
                        <p class="text-red-600 font-semibold">Sold Out!</p>
                    @endif
                </div>
                <div class="harga font-bold text-3xl w-content">
                    <p>Rp {{ number_format($product['harga'], 0, ',', '.') }}</p>
                </div>
                <div class="mt-8">
                    <p class="inline-block px-2 rounded-2xl w-content border">{{ $product['jenis'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

