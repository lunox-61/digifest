@extends('layouts.logged')

@section('content')
<div class="category-heading text-uppercase">
    <h4>Bandingkan</h4>
</div>
<div>
    <p>Pilih salah satu perusahaan yang akan dibandingkan</p>
</div>
<hr>
<div class="card-body">
    <form method="POST" action="{{ route('perbandingan') }}" class="form-inline">
        @csrf
        <div class="form-group">
            <label for="user_id" class="mr-2">Pilih User Lainnya :</label>
            <select class="form-control" name="user_id" id="user_id">
                @foreach ($semuaFormulir as $formulir)
                    <option value="{{ $formulir->id }}">{{ $formulir->nama_perusahaan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary ml-2">Bandingkan</button>
    </form>
    <br>

    @if ($formulirUser && $formulirLainnya)
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Index</th>
                    <th>Nilai ({{ $formulirUser->nama_perusahaan }})</th>
                    <th>Nilai ({{ $formulirLainnya->nama_perusahaan }})</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tatakelola dan Management</td>
                    <td>{{ number_format($hasilnilai1_1, 2) }}</td>
                    <td>{{ number_format($hasilnilai1_2, 2) }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>SDM</td>
                    <td>{{ number_format($hasilnilai2_1, 2) }}</td>
                    <td>{{ number_format($hasilnilai2_2, 2) }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Keuangan</td>
                    <td>{{ number_format($hasilnilai3_1, 2) }}</td>
                    <td>{{ number_format($hasilnilai3_2, 2) }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Inovasi</td>
                    <td>{{ number_format($hasilnilai4_1, 2) }}</td>
                    <td>{{ number_format($hasilnilai4_2, 2) }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Jaringan</td>
                    <td>{{ number_format($hasilnilai5_1, 2) }}</td>
                    <td>{{ number_format($hasilnilai5_2, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="2">Rata - Rata</td>
                    <td>{{ number_format($ratarata6_1, 2) }}</td>
                    <td>{{ number_format($ratarata6_2, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="2">Variance</td>
                    <td>{{ number_format($variance1, 2) }}</td>
                    <td>{{ number_format($variance2, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Tampilkan grafik hanya jika data formulir ditemukan -->
        <canvas id="radarChart"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <script>
            var ctx = document.getElementById('radarChart').getContext('2d');
            var radarChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: ['Tatakelola dan Management', 'SDM', 'Keuangan', 'Inovasi', 'Jaringan'],
                    datasets: [
                        {
                            label: 'Nilai ({{ $formulirUser->nama_perusahaan }})',
                            data: [
                                {{ $hasilnilai1_1 }},
                                {{ $hasilnilai2_1 }},
                                {{ $hasilnilai3_1 }},
                                {{ $hasilnilai4_1 }},
                                {{ $hasilnilai5_1 }}
                            ],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        },
                        {
                            label: 'Nilai ({{ $formulirLainnya->nama_perusahaan }})',
                            data: [
                                {{ $hasilnilai1_2 }},
                                {{ $hasilnilai2_2 }},
                                {{ $hasilnilai3_2 }},
                                {{ $hasilnilai4_2 }},
                                {{ $hasilnilai5_2 }}
                            ],
                            borderColor: 'rgba(192, 75, 75, 1)',
                            backgroundColor: 'rgba(192, 75, 75, 0.2)',
                        }
                    ]
                },
                options: {
                    scales: {
                        r: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        </script>
    @else
        <p>Cari data yang akan dibandingkan.</p>
    @endif
</div>
@endsection
