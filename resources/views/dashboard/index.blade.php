@include('dashboard.css')
<div class="dashboard_container">
    <div class="dashboard_top_text">Dashboard</div>
    @include('dashboard.row_1.index')
    @include('dashboard.row_2.index')
    @include('dashboard.row_3.index')
    @include('dashboard.row_4.index')
    @include('dashboard.row_5.index')
    <div style="content: ''; height: 25px"></div>
</div>