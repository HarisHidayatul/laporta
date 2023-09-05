@include('dashboard.row_5.css')
<div style="content: ''; height: 10px;"></div>
<div class="d-flex justify-content-start">
    <div style="background-color: white; width: 40vw; border-radius: 16px; height: 18vw; padding: 10px 15px">
        <div class="dashboard_text_row_4_1">Setoran tunai - Pending</div>
        <table class="table_dashboard_row_5">
            <thead>
                <tr>
                    <th style="width: 8vw">Tanggal</th>
                    <th style="width: 13vw">Outlet</th>
                    <th style="width: 13vw">Jumlah transfer</th>
                    <th style="width: 7vw">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                </tr>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="content: ''; width: 10px;"></div>
    <div style="background-color: white; width: 36vw; border-radius: 16px; height: 18vw; padding: 10px 15px">
        <div class="dashboard_text_row_4_1">Setoran tunai</div>
        <canvas id="barChart" width="300" height="100"></canvas>
        <div style="content: ''; height: 15px;"></div>
        <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-start align-items-center">
                <div class="border_dashboard_container_row_2" style="background: #FF47ED;"></div>
                <div class="dashboard_text_row_4_4">Belum Setor</div>
            </div>
            <div style="content: ''; height: 0.3vw;"></div>
            <div class="d-flex justify-content-start align-items-center">
                <div class="border_dashboard_container_row_2" style="background: #9747FF;"></div>
                <div class="dashboard_text_row_4_4">Pending</div>
            </div>
            <div style="content: ''; height: 0.3vw;"></div>
            <div class="d-flex justify-content-start align-items-center">
                <div class="border_dashboard_container_row_2" style="background: #FFD747;"></div>
                <div class="dashboard_text_row_4_4">Sukses</div>
            </div>
        </div>
    </div>
</div>
<script>
    // Data untuk grafik batang
    var data = {
        labels: ['Belum setor', 'Pending', 'Sukses'],
        datasets: [{
            label: 'Grafik Batang',
            backgroundColor: ['#FF47ED', '#9747FF', '#FFD747'],
            borderColor: 'transparent',
            borderWidth: 0,
            data: [5, 9, 7],
            barPercentage: 0.92, // Lebar batang relatif terhadap lebar label (0.9 = 90%)
            categoryPercentage: 0.92, // Jarak antara batang (0.9 = 90%)
            datalabels: { // Konfigurasi label teks
                anchor: 'end',
                align: 'top',
                font: {
                    weight: 'bold'
                },
                color: 'black',
                formatter: function(value, context) {
                    return value; // Menampilkan nilai data sebagai label teks
                }
            }
        }]
    };

    // Opsi konfigurasi grafik
    var options = {
        plugins: {
            legend: {
                display: false
            },
            datalabels: {
                display: true // Mengaktifkan plugin datalabels
            }
        },
        scales: {
            x: {
                display: false
            },
            y: {
                display: false
            }
        },
        layout: {
            padding: {
                top: 20
            }
        },
        elements: {
            bar: {
                borderRadius: 10
            }
        }
    };

    // Mendapatkan elemen canvas dan membuat grafik batang
    var ctx = document.getElementById('barChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
