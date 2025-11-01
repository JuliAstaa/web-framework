@extends('layout')
@section('title', $title)

@section('breadcrumb')
    @parent
    <a href="/product">Product </a>
@endsection

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">TERPOPULER</h1>

        <div class="category ">
            <h1 class="text-xl font-semibold my-2">Kategori</h1>
            <div class="flex gap-2 mb-8">
                @foreach ($jenis as $jen)
                    <a href="/product/jenis/{{ $jen }}" class="border px-2 rounded">{{ $jen }}</a>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach ($products as $product)
                <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                    class="bg-white shadow hover:shadow-lg transition p-4 flex flex-col justify-between rounded-lg">
                    <div class="card-header h-full">
                        <div class="img">
                            <img src="{{ $product['urlphoto'] }}" alt="">
                        </div>
                        <div class="product-title">
                            <h2 class="text-lg font-semibold text-gray-800">{{ $product['nama'] }}</h2>
                        </div>
                    </div>
                    <!-- <div class="line h-0.5 bg-slate-900"></div> -->
                    <div class="card-footer py-2">
                        <div class="flex justify-between gap-1">
                            @if ($product['stok'] > 0)
                                <p class="text-[#3E5F44] font-semibold">Stok {{ $product['stok'] }}</p>
                            @else
                                <p class="text-red-600 font-semibold">Sold Out!</p>
                            @endif

                        </div>
                        <p>Rp {{ number_format($product['harga'], 0, ',', '.') }}</p>
                        <div class="mt-4 text-sm">
                            <p class="inline-block px-2 rounded-2xl w-content border">{{ $product['jenis'] }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

