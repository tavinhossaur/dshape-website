 function createChart(id, labels, label, data, type){
    const ctx = document.getElementById(id).getContext('2d');
  const myChart = new Chart(ctx, {
      type: type,
      data: {
          labels: labels ,
          datasets: [{
              label: label, 
              data: data,
              backgroundColor: [
                  'rgba(25, 119, 191, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(49, 70, 224, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(102, 204, 255, 1)',
                  'rgba(30, 63, 99, 1)'
              ],
              borderColor: [
                  'rgba(15, 15, 15, 1)',
                  'rgba(15, 15, 15, 1)',
                  'rgba(15, 15, 15, 1)',
                  'rgba(15, 15, 15, 1)',
                  'rgba(15, 15, 15, 1)',
                  'rgba(15, 15, 15, 1)'
              ],
              borderWidth: 1.5
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: false
              }
          }
      }
  });
  }