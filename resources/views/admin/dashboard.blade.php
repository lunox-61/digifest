@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Users: {{ $totalUsers }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.user.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Form Record: {{ $formStats }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.formulir.datatable') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total Posts: {{ $totalPosts }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.post.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Total Announcements: {{ $totalSchedule }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('admin.jadwal.index') }}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Global Radar Chart
                </div>
                <div class="card-body">
                <a href="{{ route('export.excel') }}" class="btn btn-success">Export to Excel</a>
                <canvas id="radarChart"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Function to fetch visitor count data for a specific day
    async function fetchVisitorCountForDay(day) {
        try {
            const response = await fetch(`/${day}`); // Tambahkan parameter day ke URL
            const data = await response.json();
            return data.visitor_count;
        } catch (error) {
            console.error('Error fetching visitor count:', error);
            return 0; // Default to 0 on error
        }
    }

    // Function to update the traffic chart for each day
    async function updateTrafficChartForDays() {
        const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        const visitorCounts = [];

        for (const day of daysOfWeek) {
            const visitorCount = await fetchVisitorCountForDay(day);
            visitorCounts.push(visitorCount);
        }

        const trafficData = {
            labels: daysOfWeek,
            datasets: [{
                label: 'Page Views',
                data: visitorCounts,
                backgroundColor: 'rgba(0, 123, 255, 0.5)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        };

        const trafficConfig = {
            type: 'line',
            data: trafficData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        const trafficChart = new Chart(document.getElementById('trafficChart'), trafficConfig);
    }

    updateTrafficChartForDays(); // Call the function to update the chart on page load


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
