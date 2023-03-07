@extends('layouts.admin')

@section('content')
    <section>
        <style type="text/css">
            body {
                font-family: 'Roboto Mono', monospace;
            }

            h1 {
                text-align: center;
                font-size: 35px;
                font-weight: 900;
            }
        </style>

        <body>
            <h1>Variazione volume di ordini per mese</h1>
            <canvas id="myChart" height="100px"></canvas>
        </body>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script type="text/javascript">
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto',
                        'Settembre', 'Ottobre', 'Novembre', 'Dicembre'
                    ],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3, 14, 6, 18, 3, 21, 14],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
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
        </script>
    </section>
@endsection
