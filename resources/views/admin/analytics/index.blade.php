<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Analytics Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card my-4">
                    <div class="card-header">
                        Average Viewers by Technical Interruptions
                    </div>
                    <div class="card-body">
                        <canvas id="scheduleChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card my-4">
                    <div class="card-header">
                        Top 10 Webseries Genre Distribution
                    </div>
                    <div class="card-body">
                        <canvas id="genreChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data passed from the Laravel controller
        const scheduleData = @json($scheduleData);
        const genreData = @json($genreData);

        // =======================================================
        // CHART 1: Schedule Performance (Bar Chart)
        // =======================================================
        const scheduleCtx = document.getElementById('scheduleChart').getContext('2d');
        new Chart(scheduleCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(scheduleData).map(key => key === 'YES' ? 'Interruption (YES)' : 'No Interruption (NO)'),
                datasets: [{
                    label: 'Average Viewers',
                    data: Object.values(scheduleData),
                    backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: { display: true, text: 'Average Viewers (Count)' }
                    }
                }
            }
        });

        // =======================================================
        // CHART 2: Genre Distribution (Doughnut Chart)
        // =======================================================
        const genreCtx = document.getElementById('genreChart').getContext('2d');
        new Chart(genreCtx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(genreData),
                datasets: [{
                    label: 'Number of Series',
                    data: Object.values(genreData),
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF',
                        '#FF9F40', '#E7E9ED', '#8AC926', '#1982C4', '#6A4C93'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'Top 10 Genres by Series Count' }
                }
            }
        });
    </script>
@endsection