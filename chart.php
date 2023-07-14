<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snapshots</title>
</head>
<body style="background-color:white;" align="center">
<div>
<ul class="nav-area">
        
         <li><a href="image_upload/imageupload">Photos</a></li>
         <li><a href="chart.php">Chart</a></li>
            <li><a href="adoutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="logout.php">Logout</a></li> 
           

        </ul>
</div>
<div style="width:500px; height:500px; ">
  <canvas id="myChart" style = "width:100%; height:100%;"></canvas>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Nature', 'K-POP', 'Bollywood', 'Black&White' , 'LGBQT' , 'Cdrama' , 'Kdrama'  , 'anime' , 'food' , 'drinks' ],
      datasets: [{
        label: '# of Picture',
        data: [6, 4, 3, 6, 3, 9 , 4,  9  , 4 ,11 ],
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