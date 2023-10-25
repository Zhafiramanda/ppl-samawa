@extends('layout')
@section('title', 'Profile')

@section('content')
    <div class="p-6">
        <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h2 class="text-2xl font-semibold mb-4">Form Isi Data Mahasiswa</h2>

            <form method="POST" action="{{ route('mahasiswa.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="nim" class="block text-gray-700 text-sm font-semibold mb-2">NIM</label>
                    <input type="text" name="nim" id="nim" class="w-full border border-gray-300 p-2" placeholder="NIM" required>
                </div>

                <div class="mb-4">
                    <label for="nama_depan" class="block text-gray-700 text-sm font-semibold mb-2">Nama Depan</label>
                    <input type="text" name="nama_depan" id="nama_depan" class="w-full border border-gray-300 p-2" placeholder="Nama Depan" required>
                </div>

                <div class="mb-4">
                    <label for="nama_belakang" class="block text-gray-700 text-sm font-semibold mb-2">Nama Belakang</label>
                    <input type="text" name="nama_belakang" id="nama_belakang" class="w-full border border-gray-300 p-2" placeholder="Nama Belakang" required>
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-semibold mb-2">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="w-full border border-gray-300 p-2" placeholder="Alamat" required>
                </div>

                <div class="mb-4">
                    <label for="provinsi" class="block text-gray-700 text-sm font-semibold mb-2">Provinsi</label>
                    <input type="text" name="provinsi" id="provinsi" class="w-full border border-gray-300 p-2" placeholder="Provinsi" required>
                </div>

                <div class="mb-4">
                    <label for="kota" class="block text-gray-700 text-sm font-semibold mb-2">Kota</label>
                    <input type="text" name="kota" id="kota" class="w-full border border-gray-300 p-2" placeholder="Kota" required>
                </div>

                <div class="mb-4">
                    <label for="angkatan" class="block text-gray-700 text-sm font-semibold mb-2">Angkatan</label>
                    <input type="text" name="angkatan" id="angkatan" class="w-full border border-gray-300 p-2" placeholder="Angkatan" required>
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-semibold mb-2">Status</label>
                    <input type="text" name="status" id="status" class="w-full border border-gray-300 p-2" placeholder="Status" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 p-2" placeholder="Email" required>
                </div>

                <div class="mb-4">
                    <label for="no_handphone" class="block text-gray-700 text-sm font-semibold mb-2">Nomor Handphone</label>
                    <input type="text" name="no_handphone" id="no_handphone" class="w-full border border-gray-300 p-2" placeholder="Nomor Handphone" required>
                </div>

                <div class="mb-4">
                    <label for="jalur_masuk" class="block text-gray-700 text-sm font-semibold mb-2">Jalur Masuk</label>
                    <input type="text" name="jalur_masuk" id="jalur_masuk" class="w-full border border-gray-300 p-2" placeholder="Jalur Masuk" required>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
