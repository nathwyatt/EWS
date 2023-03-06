import Chart from 'chart.js';

axios.get('/users/chart-data')
    .then(function (response) {
        var chartData = response.data;
        var month = [];
        var totals = [];

        chartData.forEach(function (data) {
            countries.push(data.month);
            totals.push(data.total);
        });

        var ctx = document.getElementById('users-chart').getContext('2d');
        var usersChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: month,
                datasets: [{
                    label: 'Users by month',
                    data: totals,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(function (error) {
        console.log(error);
    });
