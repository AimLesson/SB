<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        <li><strong>No Barcode:</strong> {{ $barang->no_barcode }}</li>
                        <li><strong>No Item:</strong> {{ $barang->no_item }}</li>
                        <li><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</li>
                        <li><strong>Kode Log:</strong> {{ $barang->kode_log }}</li>
                        <li><strong>Jumlah:</strong> {{ $barang->jumlah }}</li>
                        <li><strong>Satuan:</strong> {{ $barang->satuan }}</li>
                        <li><strong>Harga:</strong> {{ $barang->harga }}</li>
                        <li><strong>Rak:</strong> {{ $barang->rak }}</li>
                        <li><strong>Total:</strong> {{ $barang->total }}</li>
                        <li><strong>Tanggal:</strong> {{ $barang->tanggal }}</li>
                        <li><strong>Jumlah Minimal:</strong> {{ $barang->jumlah_minimal }}</li>
                        <li><strong>No Katalog:</strong> {{ $barang->no_katalog }}</li>
                        <li><strong>Merk:</strong> {{ $barang->merk }}</li>
                        <li><strong>No Akun:</strong> {{ $barang->no_akun }}</li>
                    </ul>
                    <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
