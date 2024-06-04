<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <caption
                                class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                Detail Barang
                            </caption>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="flex justify-center items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {!! $barang->qr_code !!}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Nama Barang
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->nama_barang }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        No Item
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->no_item }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        No Akun
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->no_akun }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Kode Log
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->kode_log }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Jumlah
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->jumlah }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Satuan
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->satuan }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Harga
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->harga }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Rak
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->rak }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Total
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->total }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Tanggal
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->tanggal }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Jumlah Minimal
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->jumlah_minimal }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        No Katalog
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->no_katalog }}
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Merk
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $barang->merk }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-3 mt-6 relative border overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="LogTable">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Date</th>
                                    <th scope="col" class="px-6 py-3">Action</th>
                                    <th scope="col" class="px-6 py-3">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">{{ $log->created_at }}</td>
                                        <td class="px-6 py-4">{{ $log->action }}</td>
                                        <td class="px-6 py-4">{{ $log->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6 flex justify-between">
                        <a href="{{ route('barangs.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Back
                        </a>
                        <div class="inline-flex space-x-2">
                            <a href="{{ route('barangs.edit', $barang) }}"
                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">Edit</a>
                            <form id="delete-form-{{ $barang->id }}"
                                action="{{ route('barangs.destroy', $barang) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $barang->id }})"
                                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(barangId) {
            Swal.fire({
                title: 'Hapus Barang Ini?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + barangId).submit();
                }
            })
        }
    </script>
</x-app-layout>
