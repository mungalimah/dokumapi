@extends('template.main')

@section('content')
    <div class="container mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-black">
        Pendapatan Masuk
    </h2>
    <div class="flex flex-col w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div class="flex justify-between">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-white">Pendapatan</h5>
            <select id="time-interval" class="border rounded px-3 py-1">
                <option value="1d">1 Hari</option>
                <option value="7d" selected>1 Minggu</option>
                <option value="1m">1 Bulan</option>
            </select>
        </div>
        <div id="area-chart" class="w-full"></div>
    </div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chartOptions = {
            chart: {
                height: "300px",
                Width: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                toolbar: { show: false },
            },
            tooltip: {
                enabled: true,
                x: { show: false },
            },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#1C64F2",
                    gradientToColors: ["#1C64F2"],
                },
            },
            dataLabels: { enabled: false },
            stroke: { width: 6 },
            grid: { show: false },
            series: [],
            xaxis: {
                categories: [],
                labels: { show: true },
                axisBorder: { show: false },
                axisTicks: { show: false },
            },
            yaxis: { show: true },
        };

        const dataSets = {
            "1d": { 
                series: [{ name: "Pendapatan", data: [500, 450, 480, 520, 490] }], 
                categories: ['08:00', '10:00', '12:00', '14:00', '16:00'] 
            },
            "7d": { 
                series: [{ name: "Pendapatan", data: [3500, 4000, 3800, 4200, 3900, 4500, 4100] }], 
                categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] 
            },
            "1m": { 
                series: [{ name: "Pendapatan", data: [15000, 14000, 15500, 16000, 14500] }], 
                categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4', 'Minggu 5'] 
            },
        };

        const chartElement = document.getElementById("area-chart");
        let chart = new ApexCharts(chartElement, chartOptions);

        function updateChart(interval) {
            const data = dataSets[interval];
            chart.updateOptions({
                series: data.series,
                xaxis: { categories: data.categories }
            });
        }

        // Initial render
        chart.render();
        updateChart("7d");

        // Update chart on interval change
        document.getElementById("time-interval").addEventListener("change", function (e) {
            updateChart(e.target.value);
        });
    });
</script>
