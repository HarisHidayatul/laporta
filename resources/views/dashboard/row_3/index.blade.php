@include('dashboard.row_3.css')
<div style="background-color: white; margin-top: 15px; border-radius: 15px;">
    <div style="position: absolute; margin-top: 10px; margin-left: 15px; font-weight: 600; font-size: 1.5vw">
        Bee cloud robot
    </div>
    <div style="content: ''; height: 20px;"></div>
    <canvas id="histogram"></canvas>
</div>

<script>
  const data = {
    labels: ['Pembelian', 'Pembayaran', 'E-Commerce', 'Mutasi', 'Sukodono', 
            'Setoran', 'Pembayaran 455', 'Setoran'],
    datasets: [
      {
        label: "Belum",
        data: ['18', '18', '18', '18', '18', '18', '18', '18'],
        backgroundColor: '#F6F6F6',
        borderWidth: 0 // Menghilangkan border
      },
      {
        label: "Pending",
        data: ['15', '15', '15', '15', '15', '15', '15', '15'],
        backgroundColor: '#FDBA3E',
        borderWidth: 0 // Menghilangkan border
      },
      {
        label: "Saldo",
        data: ['8', '8', '8', '8', '8', '8', '8', '8'],
        backgroundColor: '#1CCF1C',
        borderWidth: 0 // Menghilangkan border
      },
    ]
  };

  const ctx = document.getElementById('histogram').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            font: {
              family: "Montserrat",
              size: '14vw',
              weight: 400,
              color: '#313131'
            },
            // lineHeight: 22,
            // padding: 10
          }
        },
        x: {
          ticks: {
            font: {
              family: "Montserrat",
              size: '12vw',
              weight: 400
            }
          }
        }
      },
      plugins: {
        legend: {
          position: 'top',
          align: 'end',
          labels: {
            font: {
              family: "Montserrat",
              size: '12vw',
              weight: 400,
              color: '#313131'

            }
          }
        }
      },
      layout: {
        padding: 10
      },
      elements: {
        bar: {
          borderRadius: 6
        }
      }
    }
  });
</script>
