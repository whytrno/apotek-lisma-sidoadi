@extends('layouts.main')

@section('content')
    <div class="space-y-7 p-5">
        <h1 class="text-2xl">Jumlah Transaksi dalam 2 minggu Terakhir</h1>
        <div>
            <canvas id="chart"></canvas>
        </div>
        <div class="bg-blue-500 text-white space-y-4 p-2 w-2/5">
            <p>Total penjualan hari ini</p>
            <p>Rp. 100.000</p>
        </div>
        <div class="bg-blue-500 text-white space-y-4 p-2 w-2/5">
            <p>Total penjualan pada seminggu ini</p>
            <p>Rp. 900.000</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var beasiswaData = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0];
        var beasiswaLabels = ['tes', 'tes2', 'tes3', 'tes4', 'tes5', 'tes6', 'tes7', 'tes8', 'tes9', 'tes10', 'tes11', 'tes12', 'tes13', 'tes14'];

        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: beasiswaLabels,
                datasets: [{
                    data: beasiswaData,
                    backgroundColor: ['#007bff', '#28a745'],
                }],
            }
        });
    </script>
@endpush
