@include('dashboard.row_2.css')
<div style="content: ''; margin-top: 20px"></div>
<div class="d-flex">
    <div style="width: 30vw;background-color:white; border-radius: 16px; height: 24vw">
        <div class="dashboard_text_row_2_1">Statistik setoran</div>
        <div class="progress-container">
            <svg viewBox="0 0 100 50">
                <circle class="progress-background" cx="50" cy="50" r="40"></circle>
                <circle class="progress color1" id="progress1" cx="40" cy="35" r="30"
                    stroke-dasharray="50 50"></circle>
                <circle class="progress color2" id="progress2" cx="40" cy="35" r="30"
                    stroke-dasharray="20 80"></circle>
            </svg>
        </div>
    </div>
    <div style="width: 40vw; margin-left: 15px;background-color:white; border-radius: 16px; height: 24vw">
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
<script></script>
