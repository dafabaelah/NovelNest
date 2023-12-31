

@extends('dashboard.admin.layout.main')

@section('content')
    <div class="container mx-auto mt-8">
        <canvas id="myChart" width="400" height="200"></canvas>
        <button onclick="generatePDF()">Generate PDF</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/html2pdf.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Monthly Sales',
                    data: [12, 19, 3, 5, 2],
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

        function generatePDF() {
            var chartCanvas = document.getElementById('myChart');
            var chartDataURL = chartCanvas.toDataURL('image/png');

            var pdfContent = `
                <h1>Chart Report</h1>
                <img src="${chartDataURL}" />
            `;

            var pdfOptions = {
                margin: 10,
                filename: 'chart_report.pdf',
                image: { type: 'png', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            html2pdf().from(pdfContent).set(pdfOptions).outputPdf();
        }
    </script>
@endsection