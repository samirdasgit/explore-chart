<!-- HTML code -->
<html>
<head>

</head>
<body>
    <!-- Placeholder for the chart -->
    <canvas id="myChart"></canvas>
    <!-- Include the Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Get the chart canvas element
        var ctx = document.getElementById('myChart').getContext('2d');

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'bar', // Specify the chart type
            data: {
                labels: ['January','February','March','April','May','June','July','August','September','October','November','December'], // Add labels for the x-axis
                datasets: [{
                    label: 'Monthly Expence',
                    data: [10, 20, 30], // Add data for the y-axis
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Customize the chart appearance
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // Customize the scale as needed
                    }
                }
            }
        });
    </script>
</body>
</html>