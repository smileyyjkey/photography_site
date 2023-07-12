<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snapshots</title>
</head>
<body style="background-color:black;">
<div style="width:500px; height:500px; ">
  <canvas id="myChart" style = "width:100%; height:100%;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Nature', 'Wildlife', 'K-POP', 'Bollywood', 'Black&White' , 'LGBQT' , 'Cdrama' , 'Kdrama' , 'Turkies drama' , 'anime' , 'Cartoon'  ],
      datasets: [{
        label: '# of Picture',
        data: [10, 8, 12, 9, 5, 3, 7 , 9 , 6 , 3 , 7 , 9],
        backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(57, 161, 89, 0.2)',
      'rgba(45, 305, 55, 0.2)',
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(57, 161, 89, 0.2)',
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgba(57, 161, 89)',
      'rgba(45, 305, 55)',
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
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
 
</body>
</html>