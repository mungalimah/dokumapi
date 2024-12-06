@extends('template.main')

@section('content')
    <div class="w-full mx-auto bg-white rounded-lg shadow-md p-6 overflow-y-auto max-h-[500px]">
        <div class="flex items-center mb-4">
            <span class="bg-green-100 text-green-700 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Delivered</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
            <div>
                <p class=" text-left">
                    <span class="font-semibold">Nama</span><br />
                    Nanang Ardiansyah
                </p>
                <p class=" mt-2 text-left">
                    <span class="font-semibold">Tanggal Pesan</span><br />
                    12/3/2024
                </p>
                <p class=" mt-2 text-left">
                    <span class="font-semibold">Alamat</span><br />
                    Sragen RT04/02, Sragen wetan, Sragen, jawa tengah
                </p>
                
            </div>
            <div>
                <p class=" mt-2 text-left">
                    <span class="font-semibold">Deskripsi</span><br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, excepturi iste. Voluptas hic cum quas quis esse consequuntur delectus similique accusantium, ut explicabo maiores doloribus magnam, eum est animi officiis?
                </p>
            </div>
        </div>
        <div class="border-t border-gray-200 pt-4 mt-3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
                <div>
                    <p class="text-gray-800 text-lg font-semibold text-left">Total Bayar: <span
                            class="text-black">20.000</span></p>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-200 mt-4 pt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
                <div class="flex items-start">
                    <img alt="Roti Abon" class="w-24 h-24 rounded-md object-cover mr-4"
                        src="/images/RotiAbon.jpg" />
                    <div>
                        <p class="text-gray-800 font-semibold text-left">Roti Abon</p>
                        <p class="text-gray-600 text-left">Jumlah: 12</p>
                    </div>
                </div>
                <p class="text-gray-800 font-semibold text-left">RP12.000</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
                <div class="flex items-start">
                    <img alt="Roti Abon" class="w-24 h-24 rounded-md object-cover mr-4"
                        src="/images/RotiAbon.jpg" />
                    <div>
                        <p class="text-gray-800 font-semibold text-left">Roti Abon</p>
                        <p class="text-gray-600 text-left">Jumlah: 12</p>
                    </div>
                </div>
                <p class="text-gray-800 font-semibold text-left">Rp12.000</p>
            </div>
        </div>
    </div>
@endsection
