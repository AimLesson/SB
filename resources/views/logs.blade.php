<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 relative border overflow-x-auto shadow-md sm:rounded-lg">
                    <table id="barangTable"
                        class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Log Id</th>
                                <th scope="col" class="px-6 py-3">QR Code Barang</th>
                                <th scope="col" class="px-6 py-3">ID Barang</th>
                                <th scope="col" class="px-6 py-3">Nama Barang</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $logs = \App\Models\BarangLog::get();
                                $barang = \App\Models\barang::get();
                            @endphp
                            @foreach ($logs as $l)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4 justify-center items-center">{{ $l->id }}</td>
                                    <td class="px-6 py-4 flex justify-center items-center">
                                        {!! QrCode::size(50)->generate($l->barang->no_barcode) !!}
                                    </td>
                                    <td class="px-6 py-4 justify-center items-center">{{ $l->barang_id }}</td>
                                    <td class="px-6 py-4 justify-center items-center">{{ $l->barang->nama_barang }}</td>
                                    <?php
                                    // Enhanced logic for determining action:
                                    $action = '';
                                    if ($l->action === 'entry') {
                                        $action = 'Barang Masuk'; // Consistent capitalization
                                    } else if ($l->action === 'exit') {
                                        $action = 'Barang Keluar'; // Consistent capitalization
                                    } else {
                                        // Handle unexpected action values gracefully
                                        $action = 'Unknown Action: ' . $l->action;
                                    }
                                    ?>
                                    <td class="px-6 py-4 justify-center items-center">{{ $action }}</td>
                                    <td class="px-6 py-4 justify-center items-center">{{ $l->quantity }}</td>
                                    <td class="px-6 py-4 justify-center items-center">{{ $l->updated_at }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
