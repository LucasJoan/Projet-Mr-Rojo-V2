var data = [
    {  weight: 80, caloriesConsumed: 2000, caloriesBurned: 500 },
    { weight: 79, caloriesConsumed: 1800, caloriesBurned: 600 },
    { weight: 78.5, caloriesConsumed: 2200, caloriesBurned: 550 },
    { weight: 78, caloriesConsumed: 1900, caloriesBurned: 450 },
  ];
  
  function generateDashboard() {
    generateCharts();
    generateData();
  }
  
  function generateCharts() {
  
    var weightData = data.map(function(item) {
      return item.weight;
    });
  
    var consumedData = data.map(function(item) {
      return item.caloriesConsumed;
    });
  
    var burnedData = data.map(function(item) {
      return item.caloriesBurned;
    });
  
    var ctx = document.getElementById('charts').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: chartLabels,
        datasets: [
          {
            label: 'Poids (kg)',
            data: weightData,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          },
          {
            label: 'Calories consommées',
            data: consumedData,
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
          },
          {
            label: 'Calories brûlées',
            data: burnedData,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }
        ]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  }
  
  function generateData() {
    var tableBody = document.getElementById('data').getElementsByTagName('tbody')[0];
  
    tableBody.innerHTML = '';
  
    for (var i = 0; i < data.length; i++) {
      var row = document.createElement('tr');
  
      var dateCell = document.createElement('td');
      dateCell.textContent = data[i].date;
      row.appendChild(dateCell);
  
      var weightCell = document.createElement('td');
      weightCell.textContent = data[i].weight;
      row.appendChild(weightCell);
  
      var consumedCell = document.createElement('td');
      consumedCell.textContent = data[i].caloriesConsumed;
      row.appendChild(consumedCell);
  
      var burnedCell = document.createElement('td');
      burnedCell.textContent = data[i].caloriesBurned;
      row.appendChild(burnedCell);
  
      tableBody.appendChild(row);
    }
  }
  
  generateDashboard();
  