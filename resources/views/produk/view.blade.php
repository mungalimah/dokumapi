@extends('template.main')

@section('content')
<div class="container mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-black">
        Detail Produk
    </h2>
    
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <div class="flex items-center">
            <div class="w-1/3 mr-6">
                <img class="object-cover h-64 w-full rounded" src="img/roti sosis.jpg" alt="Gambar Produk" />
            </div>
            <div class="w-2/3">
                <h3 class="text-xl font-semibold text-black mb-4">Roti Kering</h3>
                <p class="text-gray-600 mb-4">Kategori: Roti</p>
                <p class="text-gray-600 mb-4">Deskripsi: Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="text-gray-600 mb-4">Stok: 100</p>
                <p class="text-gray-600 mb-4">Harga: Rp5.000</p>
            </div>
        </div>

        <div class="flex mt-6">
            <a href="/edit" class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mr-2">
                Edit Produk
            </a>
            <a href="/produk" class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
