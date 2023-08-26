@include('dashboard.row_2.css')
<div style="content: ''; margin-top: 20px"></div>
<div class="d-flex">
    <div style="width: 35vw;background-color:white; border-radius: 16px; height: 27vw">
        <div class="dashboard_text_row_2_1">Statistik setoran</div>
        <div class="dashboard_progress_container_row_2">
            <div class="progress_container_row_2" id="progress_container_row_2_1"></div>
            <div class="progress_container_row_2" id="progress_container_row_2_2"></div>
            <div class="progress_container_row_2" id="progress_container_row_2_3"></div>
            <div class="d-flex justify-content-center align-items-center progress_container_row_2">
                <div class="dashboard_text_row_2_3">75%</div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-between" style="width: 90%">
                <div>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="border_dashboard_container_row_2" style="background: #FF4E2F;"></div>
                        <div class="dashboard_text_row_2_4">Belum Setor</div>
                    </div>
                    <div class="dashboard_text_row_2_5">55%</div>
                </div>
                <div>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="border_dashboard_container_row_2" style="background: #FDBA3E;"></div>
                        <div class="dashboard_text_row_2_4">Pending</div>
                    </div>
                    <div class="dashboard_text_row_2_5">20%</div>
                </div>
                <div>
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="border_dashboard_container_row_2" style="background: #3145FF;"></div>
                        <div class="dashboard_text_row_2_4">Sukses</div>
                    </div>
                    <div class="dashboard_text_row_2_5">20%</div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 40vw; margin-left: 15px;background-color:white; border-radius: 16px; height: 27vw">
        <div class="d-flex justify-content-between">
            <div class="dashboard_text_row_2_1">Saldo patty cash</div>
            <div class="dashboard_text_row_2_2">Lihat semua</div>
        </div>
        <table class="table_dashboard_row_1">
            <thead>
                <tr>
                    <th style="width: 10vw">Outlet</th>
                    <th style="width: 10vw">Saldo petty cash</th>
                    <th style="width: 5vw">Status</th>
                    <th>SPV</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lazizaa Sukodono</td>
                    <td>1.200.300</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td class="d-flex justify-content-start align-items-center">
                        <img src="{{ url('img/dashboard_top_icon/icon_user.svg') }}" alt="">
                        <div style="content: ''; margin-left: 5px;"></div>
                        <div>
                            Wahyu tri mukti budiono
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lazizaa Sukodono</td>
                    <td>1.200.300</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td class="d-flex justify-content-start align-items-center">
                        <img src="{{ url('img/dashboard_top_icon/icon_user.svg') }}" alt="">
                        <div style="content: ''; margin-left: 5px;"></div>
                        <div>
                            Wahyu tri mukti budiono
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lazizaa Sukodono</td>
                    <td>1.200.300</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td class="d-flex justify-content-start align-items-center">
                        <img src="{{ url('img/dashboard_top_icon/icon_user.svg') }}" alt="">
                        <div style="content: ''; margin-left: 5px;"></div>
                        <div>
                            Wahyu tri mukti budiono
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lazizaa Sukodono</td>
                    <td>1.200.300</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td class="d-flex justify-content-start align-items-center">
                        <img src="{{ url('img/dashboard_top_icon/icon_user.svg') }}" alt="">
                        <div style="content: ''; margin-left: 5px;"></div>
                        <div>
                            Wahyu tri mukti budiono
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lazizaa Sukodono</td>
                    <td>1.200.300</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td class="d-flex justify-content-start align-items-center">
                        <img src="{{ url('img/dashboard_top_icon/icon_user.svg') }}" alt="">
                        <div style="content: ''; margin-left: 5px;"></div>
                        <div>
                            Wahyu tri mukti budiono
                        </div>
                    </td>
                </tr>
                <!-- Tambahkan baris lainnya di sini -->
            </tbody>
        </table>
    </div>
</div>
<script>
    var bar_dashboard_row_2_1 = new ProgressBar.SemiCircle('#progress_container_row_2_1', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        // color: '#3145FF',
        color: '#FF4E2F',
        trailWidth: 0,
        svgStyle: null
    });
    var bar_dashboard_row_2_2 = new ProgressBar.SemiCircle('#progress_container_row_2_2', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        color: '#FDBA3E',
        trailWidth: 0,
        svgStyle: null
    });
    var bar_dashboard_row_2_3 = new ProgressBar.SemiCircle('#progress_container_row_2_3', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        // color: '#FF4E2F',
        color: '#3145FF',
        trailWidth: 0,
        svgStyle: null
    });

    bar_dashboard_row_2_1.animate(1); // Number from 0.0 to 1.0
    bar_dashboard_row_2_2.animate(0.8); // Number from 0.0 to 1.0
    bar_dashboard_row_2_3.animate(0.5); // Number from 0.0 to 1.0
</script>
