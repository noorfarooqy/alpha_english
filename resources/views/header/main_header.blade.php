<div class="header">
    <div class="pull-left">
        <div class="logo"><a href="index.html">
                <img src="/assets/images/footer_logo.png" width="100" alt="" /> 
                </a>
        </div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
            <li class="header-icon dib"><i class="ti-bell"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    {{-- <img class="pull-left m-r-10 avatar-img" src="/admin/assets/images/avatar/3.jpg"
                                        alt="" /> --}}
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"> </small>
                                        <div class="notification-heading"> No notifications</div>
                                        <div class="notification-text">  </div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">0 New Messages</span>
                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    {{-- <img class="pull-left m-r-10 avatar-img" src="/admin/assets/images/avatar/3.jpg"
                                        alt="" /> --}}
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right"> </small>
                                        <div class="notification-heading"> No messages</div>
                                        <div class="notification-text"></div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><img class="avatar-img" src="/admin/assets/images/avatar/1.jpg" alt="" /> <span
                    class="user-avatar"> {{Auth::user()->name}} <i class="ti-angle-down f-s-10"></i></span>
                <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-body">
                        <ul>
                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                            <li><a href="#"><i class="ti-wallet"></i> <span>Settings</span></a></li>
                            <li><a href="#" onclick="console.log('hi'); document.querySelector('form#logoutForm').submit()"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            <form action="/logout" method="post" id="logoutForm">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
