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
                <option value="1d" {{ $interval == '1d' ? 'selected' : '' }}>1 Hari</option>
                <option value="7d" {{ $interval == '7d' ? 'selected' : '' }}>1 Minggu</option>
                <option value="1m" {{ $interval == '1m' ? 'selected' : '' }}>1 Bulan</option>
            </select>
        </div>
        <div id="area-chart" class="w-full"></div>
    </div>
</div>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Menyiapkan data pendapatan yang diterima dari controller
    const pendapatan = @json($pendapatan);

    // Menyiapkan struktur data untuk chart
    const dataSets = {
        "1d": { 
            series: [{ name: "Pendapatan", data: [] }], 
            categories: [] 
        },
        "7d": { 
            series: [{ name: "Pendapatan", data: [] }], 
            categories: [] 
        },
        "1m": { 
            series: [{ name: "Pendapatan", data: [] }], 
            categories: [] 
        },
    };

    // Organisasi data berdasarkan interval
    function organizeData(pendapatan, interval) {
        const seriesData = [];
        const categories = [];
        
        pendapatan.forEach(function (pesanan) {
            const total = pesanan.total_harga;
            const date = new Date(pesanan.updated_at);
            let label = '';

            if (interval === '1d') {
                label = date.getHours() + ':' + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
            } else if (interval === '7d') {
                label = date.toLocaleString('id-ID', { weekday: 'long' });
            } else if (interval === '1m') {
                label = 'Minggu ' + Math.ceil((date.getDate() / 7));
            }

            // Format angka agar tidak ada desimal
            const formattedTotal = Math.round(total);

            if (!categories.includes(label)) {
                categories.push(label);
                seriesData.push(formattedTotal);
            } else {
                const index = categories.indexOf(label);
                seriesData[index] += formattedTotal;
            }
        });

        return { series: [{ name: "Pendapatan", data: seriesData }], categories: categories };
    }

    // Mengambil data berdasarkan interval
    const chartData = organizeData(pendapatan, "{{ $interval }}");

    // Opsi chart
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
            y: {
                formatter: function(value) {
                    // Mengatur tooltip agar hanya menampilkan angka bulat
                    return Math.round(value);
                }
            },
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
        series: chartData.series,
        xaxis: {
            categories: chartData.categories,
            labels: { show: true },
            axisBorder: { show: false },
            axisTicks: { show: false },
        },
        yaxis: { show: true },
    };

    const chartElement = document.getElementById("area-chart");
    let chart = new ApexCharts(chartElement, chartOptions);

    // Render chart
    chart.render();

    // Update chart on interval change
    document.getElementById("time-interval").addEventListener("change", function (e) {
        window.location.href = "/pendapatan?interval=" + e.target.value;
    });
});

</script>
