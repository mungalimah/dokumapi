@extends('template.main')

@section('content')
    <div class="container mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-black">
            CRUD Produk
        </h2>
        <div class="grid grid-cols-2">
            <div class="relative col-start-1">
                <input type="email"
                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-10 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                    placeholder="Search" />
                <button
                    class="absolute right-1 top-1 rounded bg-slate-800 p-1.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <div class="col-end-7 mr-4 mb-2">
                <a href="/add"
                    class="flex items-center bg-blue-500 hover:bg-blue-500 font-medium rounded-lg text-sm px-6 py-2.5 dark:bg-green-700 dark:hover:bg-green-700 dark:focus:bg-green-900">
                    <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="ml-2 text-sm text-white">Tambah Barang</span>
                </a>
            </div>
        </div>


    </div>
    <div class="mb-8 mr-4 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-black uppercase border-b-2 dark:border-gray-300 bg-red-400 dark:text-white dark:bg-grey-500">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Gambar</th>
                        <th class="px-4 py-3">Nama Produk</th>
                        <th class="px-4 py-3">Kategori Produk</th>
                        <th class="px-4 py-3">Deskripsi</th>
                        <th class="px-4 py-3">Stok</th>
                        <th class="px-4 py-3">Harga</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:bg-white">
                    <tr class="text-gray-700 dark:text-black">
                        <td class="px-4 py-3 text-base">
                            1
                        </td>
                        <td class="px-4 py-3 text-base">
                            <div class="relative hidden mr-3 rounded-full md:block">
                                <img class="object-cover h-121 w-121" src="img/roti sosis.jpg" alt=""
                                    loading="lazy" />
                                <div class="absolute inset-0 rounded-sm shadow-inner" aria-hidden="true">
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-base">
                            Roti Kering
                        </td>
                        <td class="px-4 py-3 text-base">
                            Roti
                        </td>
                        <td class="px-4 py-3 text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.
                        </td>
                        <td class="px-4 py-3 text-base">
                            100
                        </td>
                        <td class="px-4 py-3 text-base">
                            Rp5.000
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <a href="/edit"
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-blue-800 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5 text-blue-700" aria-hidden="true" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="/view"
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5  rounded-lg dark:text-red-800 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="h-5 w-5 text-purple-700" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M2 12l1.5 2a11 11 0 0 0 17 0l1.5 -2" />
                                        <path d="M2 12l1.5 -2a11 11 0 0 1 17 0l1.5 2" />
                                    </svg>
                                </a>
                                <a href="/delete"
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5  rounded-lg dark:text-red-800 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit" onclick="return confirmDelete()">
                                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6" />
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                        <line x1="10" y1="11" x2="10" y2="17" />
                                        <line x1="14" y1="11" x2="14" y2="17" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-black bg-gray-50 sm:grid-cols-9 dark:text-black dark:bg-white">
            <span class="flex items-center col-span-3">
                Showing 21-30 of 100
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                            <button
                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous">
                                <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                1
                            </button>
                        </li>
                        <li>
                            <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                9
                            </button>
                        </li>
                        <li>
                            <button
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </span>
        </div>
    </div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Apakah kamu yakin ingin menghapus produk? jika dihapus maka produk tidak bisa dikembalikan lagi");
    }
</script>
