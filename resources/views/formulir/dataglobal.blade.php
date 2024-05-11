@extends('layouts.logged')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Data Global</h4>
</div>
<hr>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Index</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
                <tr>
        <td>1</td>
        <td>Tatakelola dan Management</td>
        <td>{{number_format ($hasilnilai1, 2) }}</td>
    </tr>
    <tr>
        <td>2</td>
        <td>SDM</td>
        <td>{{number_format ($hasilnilai2, 2) }}</td>
    </tr>
    <tr>
        <td>3</td>
        <td>keuangan</td>
        <td>{{number_format ($hasilnilai3, 2) }}</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Inovasi</td>
        <td>{{number_format ($hasilnilai4, 2) }}</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Jaringan</td>
        <td>{{number_format ($hasilnilai5, 2) }}</td>
    </tr>
    <tr>
        <td colspan="2">Rata - Rata</td>
        <td>{{number_format ( $totalRatarata6, 2) }}</td>
    </tr>
    <tr>
        <td colspan="2">Variance</td>
        <td>{{number_format ($variance, 2) }}</td>
    </tr>
        </tbody>
    </table><br>

    <!-- radar chart -->
    <canvas id="radarChart"></canvas>
</div>
<script>
    /* Script Radar Chart */
    var ctx = document.getElementById('radarChart').getContext('2d');
    var radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Tatakelola dan Management', 'SDM', 'Keuangan', 'Inovasi', 'Jaringan'],
            datasets: [{
                label: 'Nilai',
                data: [
                    {{ $hasilnilai1 }},
                    {{ $hasilnilai2 }},
                    {{ $hasilnilai3 }},
                    {{ $hasilnilai4 }},
                    {{ $hasilnilai5 }}
                ],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
            }]
        },
        options: {
            scale: {
                ticks: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
</script>
@endsection
