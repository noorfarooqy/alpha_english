
<!-- /# row -->
<div id="main-content">

    @include('dashboard.general_analytics')

    <div class="row">
        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-body">
                    <div class="ct-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- /# column -->
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="ct-svg-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- /# row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="footer">
                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh
                        Dashboard</a></p>
            </div>
        </div>
    </div>
</div>
