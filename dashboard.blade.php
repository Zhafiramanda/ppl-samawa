@extends('layout')
@section('title', 'Dashboard')

@section('content')
<div class="p-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-bold mb-4">Dashboard</h2>
            <p class="text-xl font-semibold mb-3">Selamat Datang, Hidayah</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-blue-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">IRS (Isian Rencana Studi)</h3>
                    <a href="{{ route('irs') }}" class="text-1xl text-blue-600">Lihat IRS</a>
                </div>

                <div class="bg-green-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">KHS (Kartu Hasil Studi)</h3>
                    <a href="{{ route('khs') }}" class="text-1xl text-blue-600">Lihat KHS</a>
                </div>

                <div class="bg-yellow-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">PKL (Praktik Kerja Lapangan)</h3>
                    <a href="{{ route('pkl') }}" class="text-1xl text-blue-600">Lihat PKL</a>
                </div>

                <div class="bg-purple-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Skripsi</h3>
                    <a href="{{ route('skripsi') }}" class="text-1xl text-blue-600">Lihat Skripsi</a>
                </div>
            </div>
        </div>
    </div>
@endsection