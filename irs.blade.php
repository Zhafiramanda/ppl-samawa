@extends('layout')
@section('title', 'IRS')

@section('content')
    <div class="p-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">IRS (Isian Rencana Studi)</h2>

            <form action="{{ route('irs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="semester_aktif" class="block text-gray-700 text-sm font-semibold mb-2">Semester Aktif</label>
                    <input type="text" name="semester_aktif" id="semester_aktif" class="w-full border border-gray-300 p-2" placeholder="Semester Aktif" required>
                </div>

                <div class="mb-4">
                    <label for="jumlah_sks" class="block text-gray-700 text-sm font-semibold mb-2">Jumlah SKS</label>
                    <input type="text" name="jumlah_sks" id="jumlah_sks" class="w-full border border-gray-300 p-2" placeholder="Jumlah SKS" required>
                </div>

                <div class="mb-4">
                    <label for="scan_sks" class="block text-gray-700 text-sm font-semibold mb-2">Scan SKS (File Gambar)</label>
                    <input type="file" name="scan_sks" id="scan_sks" accept="image/*" class="w-full border border-gray-300 p-2" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan IRS</button>
                </div>
            </form>
        </div>
    </div>
@endsection
