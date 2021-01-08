
@php
    $bars = [
        [
            "title" => "Games played",
            "count" => 2,
            "bottom_1_info" => 0,
            "bottom_2_info" => 2,
            "bottom_1_title" => "Yesterday",
            "bottom_2_title" => "Today",
            "preview_icon" => "ti-cup"],
        [
            "title" => "Active Students",
            "count" => 10,
            "bottom_1_info" => 5,
            "bottom_2_info" => 6,
            "bottom_1_title" => "Yesterday",
            "bottom_2_title" => "Today",
            "preview_icon" => "ti-wallet"],
        [
            "title" => "Total PPTs",
            "count" => 6,
            "bottom_1_info" => 4,
            "bottom_2_info" => 7,
            "bottom_1_title" => "Yesterday",
            "bottom_2_title" => "Today",
            "preview_icon" => "ti-cup"],
        [
            "title" => "Hours played",
            "count" => 8,
            "bottom_1_info" => 6,
            "bottom_2_info" => 9,
            "bottom_1_title" => "Yesterday",
            "bottom_2_title" => "Today",
            "preview_icon" => "ti-cup"],
    ];
@endphp

<div class="row">
     <div class="col-lg-3">
        <div class="card alert">
            <div class="card-body">
                <div class="stat-widget-seven">
                    <div class="stat-icon">
                        <i class="ti-reload pull-left"></i>
                        <div class="card-option drop-menu pull-right"><i class="ti-settings" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" role="link"></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stat-content">
                        <div class="stat-heading">
                            <div class="count-header">{{$bars[0]["title"]}}</div>
                            <div class="stat-count">{{$bars[0]["count"]}}</div>
                        </div>
                        <div class="gradient-circle" id="visitor-circle">
                            <i class="ti-cup"></i>
                        </div>
                        <div class="stat-footer">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0 text-left">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">{{$bars[0]["bottom_1_info"]}}</div>
                                    <div class="count-header">{{$bars[0]["bottom_1_title"]}}</div>
                                </div>
                                <div class="col-lg-6 p-0 text-right">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">2</div>
                                    <div class="count-header">Today</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card alert">
            <div class="card-body">
                <div class="stat-widget-seven">
                    <div class="stat-icon">
                        <i class="ti-reload pull-left"></i>
                        <div class="card-option drop-menu pull-right"><i class="ti-settings" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" role="link"></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stat-content">
                        <div class="stat-heading">
                            <div class="count-header">{{$bars[1]["title"]}}</div>
                            <div class="stat-count">{{$bars[1]["count"]}}</div>
                        </div>
                        <div class="gradient-circle" id="bounce-circle">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="stat-footer">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0 text-left">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">{{$bars[1]["bottom_1_info"]}}</div>
                                    <div class="count-header">{{$bars[1]["bottom_1_title"]}}</div>
                                </div>
                                <div class="col-lg-6 p-0 text-right">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">{{$bars[1]["bottom_2_info"]}}</div>
                                    <div class="count-header">{{$bars[1]["bottom_2_title"]}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card alert">
            <div class="card-body">
                <div class="stat-widget-seven">
                    <div class="stat-icon">
                        <i class="ti-reload pull-left"></i>
                        <div class="card-option drop-menu pull-right"><i class="ti-settings" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" role="link"></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stat-content">
                        <div class="stat-heading">
                            <div class="count-header">Growth Rate</div>
                            <div class="stat-count">8,49,690</div>
                        </div>
                        <div class="gradient-circle" id="growth-circle">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="stat-footer">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0 text-left">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">6,54,003</div>
                                    <div class="count-header">Average Growth</div>
                                </div>
                                <div class="col-lg-6 p-0 text-right">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">1,36,580</div>
                                    <div class="count-header">Today Growth</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card alert">
            <div class="card-body">
                <div class="stat-widget-seven">
                    <div class="stat-icon">
                        <i class="ti-reload pull-left"></i>
                        <div class="card-option drop-menu pull-right"><i class="ti-settings" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="true" role="link"></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="stat-content">
                        <div class="stat-heading">
                            <div class="count-header">Page Views</div>
                            <div class="stat-count">9,47,570</div>
                        </div>
                        <div class="gradient-circle" id="pageviews-circle">
                            <i class="ti-wallet"></i>
                        </div>
                        <div class="stat-footer">
                            <div class="row m-0">
                                <div class="col-lg-6 p-0 text-left">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">3,48,420</div>
                                    <div class="count-header">Average Views</div>
                                </div>
                                <div class="col-lg-6 p-0 text-right">
                                    <div class="analytic-arrow">
                                        <i class="ti-arrow-up"></i>
                                        <i class="ti-arrow-down"></i>
                                    </div>
                                    <div class="stat-count">1,92,035</div>
                                    <div class="count-header">Today Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
