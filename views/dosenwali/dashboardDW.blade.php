@extends('layout')

@section('title', 'DashboardDW')

@section('content')
    <div class="p-6">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl font-bold mb-4">Dashboard</h2>
            <p class="text-xl font-semibold mb-3">Selamat Datang, Prapung Jaya</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <div class="bg-blue-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Jumlah Mahasiswa Perwalian</h3>
                    <p class="text-2xl text-blue-600">50 Mahasiswa</p>
                </div>

                <!-- <div class="bg-green-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Grafik KHS</h3>
                    <canvas id="khsChart"></canvas>
                </div>
                
                <div class="bg-yellow-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Grafik IRS</h3>
                    <canvas id="irsChart"></canvas>
                </div>

                <div class="bg-purple-200 p-4 rounded shadow">
                    <h3 class="text-lg font-semibold mb-2">Grafik PKL</h3>
                    <canvas id="pklChart"></canvas>
                </div>
            </div>
        </div> -->
    </div>
@endsection

@push('scripts')
    <script>
        // Contoh JavaScript untuk menggambar grafik data KHS
        const khsChart = new Chart(document.getElementById('khsChart'), {
            type: 'bar',
            data: {
                labels: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4'],
                datasets: [{
                    label: 'Nilai KHS',
                    data: [80, 85, 90, 88],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Contoh JavaScript untuk menggambar grafik data IRS
        const irsChart = new Chart(document.getElementById('irsChart'), {
            type: 'line',
            data: {
                labels: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4'],
                datasets: [{
                    label: 'IPS',
                    data: [3.2, 3.4, 3.5, 3.6],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Contoh JavaScript untuk menggambar grafik data PKL
        const pklChart = new Chart(document.getElementById('pklChart'), {
            type: 'doughnut',
            data: {
                labels: ['Lulus', 'Belum Lulus'],
                datasets: [{
                    label: 'Status PKL',
                    data: [80, 20],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endpush
