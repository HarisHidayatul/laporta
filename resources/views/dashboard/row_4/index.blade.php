@include('dashboard.row_4.css')
<div style="content: ''; margin-top: 10px;"></div>
<div class="d-flex justify-content-start">
    <div
        style="background-color: white; width: 50vw; height: 10vw; border-radius: 16px; height: 27vw; padding: 10px 15px">
        <div class="d-flex justify-content-between">
            <div class="dashboard_text_row_4_1">Reimburse</div>
            <div class="dashboard_input_text_row_4">
                <div class="d-flex justify-content-between align-items-center" style="height: 100%; padding: 0px 1vw">
                    <div class="dashboard_text_row_4_2">Reimburse</div>
                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 0.75L6 5.25L10.5 0.75" stroke="#9C9C9C" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
        <table class="table_dashboard_row_4">
            <thead>
                <tr>
                    <th style="width: 8vw">Tanggal</th>
                    <th style="width: 7vw">Outlet</th>
                    <th style="width: 7vw">Item Kas</th>
                    <th style="width: 7vw">Debit</th>
                    <th style="width: 7vw">Status</th>
                    <th style="width: 7vw">Mutasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>Reimburse</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td>
                        TRSF E-BANKING DB 0506/FTSCY/WS95051 1443500.00..
                    </td>
                </tr>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>Reimburse</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td>
                        TRSF E-BANKING DB 0506/FTSCY/WS95051 1443500.00..
                    </td>
                </tr>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>Reimburse</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td>
                        TRSF E-BANKING DB 0506/FTSCY/WS95051 1443500.00..
                    </td>
                </tr>
                <tr>
                    <td>12/06/23</td>
                    <td>Lazizaa Sukodono</td>
                    <td>Reimburse</td>
                    <td>1.440.326</td>
                    <td>
                        <img src="{{ url('img/dashboard_top_icon/pending_status.svg') }}" alt="">
                    </td>
                    <td>
                        TRSF E-BANKING DB 0506/FTSCY/WS95051 1443500.00..
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="content: ''; width: 10px;"></div>
    <div
        style="background-color: white; width: 26vw; height: 10vw; border-radius: 16px; height: 27vw; padding: 10px 15px">
        <div class="dashboard_text_row_4_1">Reimburse</div>
        <div class="d-flex justify-content-center">
            <div class="dashboard_progress_container_row_4">
                <div class="progress_container_row_4" id="progress_container_row_4_1"></div>
                <div class="progress_container_row_4" id="progress_container_row_4_2"></div>
                <div class="progress_container_row_4" id="progress_container_row_4_3"></div>
                <div class="d-flex justify-content-center align-items-center progress_container_row_4">
                    <div class="dashboard_text_row_4_3">75%</div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center">
            <div class="border_dashboard_container_row_2" style="background: #FF4E2F;"></div>
            <div class="dashboard_text_row_4_4">Belum Setor</div>
        </div>
        <div style="content: ''; height: 0.3vw;"></div>
        <div class="d-flex justify-content-start align-items-center">
            <div class="border_dashboard_container_row_2" style="background: #FDBA3E;"></div>
            <div class="dashboard_text_row_4_4">Pending</div>
        </div>
        <div style="content: ''; height: 0.3vw;"></div>
        <div class="d-flex justify-content-start align-items-center">
            <div class="border_dashboard_container_row_2" style="background: #3145FF;"></div>
            <div class="dashboard_text_row_4_4">Sukses</div>
        </div>
    </div>
</div>

<script>
    var bar_dashboard_row_4_1 = new ProgressBar.Circle('#progress_container_row_4_1', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        // color: '#3145FF',
        color: '#FF4E2F',
        trailWidth: 0,
        svgStyle: null
    });
    var bar_dashboard_row_4_2 = new ProgressBar.Circle('#progress_container_row_4_2', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        color: '#FDBA3E',
        trailWidth: 0,
        svgStyle: null
    });
    var bar_dashboard_row_4_3 = new ProgressBar.Circle('#progress_container_row_4_3', {
        strokeWidth: 15,
        easing: 'easeInOut',
        duration: 1400,
        // color: '#FF4E2F',
        color: '#3145FF',
        trailWidth: 0,
        svgStyle: null
    });

    bar_dashboard_row_4_1.animate(1); // Number from 0.0 to 1.0
    bar_dashboard_row_4_2.animate(0.8); // Number from 0.0 to 1.0
    bar_dashboard_row_4_3.animate(0.5); // Number from 0.0 to 1.0
</script>
