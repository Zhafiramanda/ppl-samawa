@extends('layout')
@section('title', 'PKL')

@section('content')
    <div class="p-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-semibold mb-4">PKL (Praktik Kerja Lapangan)</h2>

            <form action="{{ route('pkl.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="status_skripsi" class="block text-gray-700 text-sm font-semibold mb-2">Status skripsi</label>
                    <select name="status_skripsi" id="status_skripsi" class="w-full border border-gray-300 p-2" required>
                        <option value=""></option>
                        <option value="sudah_mengambil">Sedang Mengambil</option>
                        <option value="belum_mengambil">Belum Mengambil</option>
                        <option value="belum_mengambil">Lulus</option>
                    </select>
                </div>


                <div class="mb-4">
                    <label for="nilai_pkl" class="block text-gray-700 text-sm font-semibold mb-2">Nilai PKL</label>
                    <input type="text" name="nilai_pkl" id="nilai_pkl" class="w-full border border-gray-300 p-2" placeholder="Nilai PKL" required>
                </div>

                <div class="mb-4">
                    <label for="scan_berita_acara_pkl" class="block text-gray-700 text-sm font-semibold mb-2">Scan Berita Acara PKL (File Gambar)</label>
                    <input type="file" name="scan_berita_acara_pkl" id="scan_berita_acara_pkl" accept="image/*" class="w-full border border-gray-300 p-2" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan PKL</button>
                </div>
            </form>
        </div>
    </div>
@endsection
