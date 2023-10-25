@extends('layout')
@section('title', 'KHS')

@section('content')
    <div class="p-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">KHS (Kartu Hasil Studi)</h2>

            <form action="{{ route('khs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="semester_aktif" class="block text-gray-700 text-sm font-semibold mb-2">Semester Aktif</label>
                    <input type="text" name="semester_aktif" id="semester_aktif" class="w-full border border-gray-300 p-2" placeholder="Semester Aktif" required>
                </div>

                <div class="mb-4">
                    <label for="sks_semester" class="block text-gray-700 text-sm font-semibold mb-2">SKS Semester</label>
                    <input type="text" name="sks_semester" id="sks_semester" class="w-full border border-gray-300 p-2" placeholder="SKS Semester" required>
                </div>

                <div class="mb-4">
                    <label for="sks_kumulatif" class="block text-gray-700 text-sm font-semibold mb-2">SKS Kumulatif</label>
                    <input type="text" name="sks_kumulatif" id="sks_kumulatif" class="w-full border border-gray-300 p-2" placeholder="SKS Kumulatif" required>
                </div>

                <div class="mb-4">
                    <label for="ip_semester" class="block text-gray-700 text-sm font-semibold mb-2">IP Semester</label>
                    <input type="text" name="ip_semester" id="ip_semester" class="w-full border border-gray-300 p-2" placeholder="IP Semester" required>
                </div>

                <div class="mb-4">
                    <label for="ip_kumulatif" class="block text-gray-700 text-sm font-semibold mb-2">IP Kumulatif</label>
                    <input type="text" name="ip_kumulatif" id="ip_kumulatif" class="w-full border border-gray-300 p-2" placeholder="IP Kumulatif" required>
                </div>

                <div class="mb-4">
                    <label for="scan_khs" class="block text-gray-700 text-sm font-semibold mb-2">Scan KHS (File Gambar)</label>
                    <input type="file" name="scan_khs" id="scan_khs" accept="image/*" class="w-full border border-gray-300 p-2" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan KHS</button>
                </div>
            </form>
        </div>
    </div>
@endsection
