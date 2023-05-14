const ctx1 = document.getElementById("chart1").getContext('2d');
      const myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
          labels: ["sunday", "monday", "tuesday",
          "wednesday", "thursday", "friday", "saturday"],
          datasets: [{
            label: 'Last week',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });

    //  Doughnut Chart
    const ctx2 = document.getElementById("chart2").getContext('2d');
    const myChart2 = new Chart(ctx2, {
      type: 'doughnut',
      data: {
        labels: ["rice", "yam", "tomato", "potato", "beans",
         "maize", "oil"],
        datasets: [{
          label: 'food Items',
          data: [30, 40, 20, 50, 80, 90, 20],
          backgroundColor: ["#0074D9", "#FF4136", "#2ECC40",
          "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00",
          "#001f3f", "#39CCCC", "#01FF70", "#85144b",
          "#F012BE", "#3D9970", "#111111", "#AAAAAA"]
        }]
      },
    });

    const ctx3 = document.getElementById("chart3").getContext('2d');
    const myChart3 = new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ["Jan", "Feb", "March", "April",
        "May", "June", "July", "August", "September", "October", "November"],
        datasets: [{
          label: 'Post Numbers',
          backgroundColor: 'rgba(161, 198, 247, 1)',
          borderColor: 'rgb(47, 128, 237)',
          data: [30, 40, 20, 50, 80, 90, 20, 25, 80, 10, 25],
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
            }
          }]
        }
      },
    });