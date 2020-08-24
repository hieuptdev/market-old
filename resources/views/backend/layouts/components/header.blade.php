<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                </form>

                {{-- <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="backend/images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">@if (Auth::check())
                                    {{ Auth::user()->name}}
                @endif</a>
            </div>

            <div class="account-dropdown js-dropdown">
                <div class="info clearfix">
                    <div class="image">
                        <a href="#">
                            <img src="backend/images/icon/avatar-01.jpg" alt="John Doe" />
                        </a>
                    </div>
                    <div class="content">
                        <h5 class="name">
                            <a href="#">@if (Auth::check())
                                {{ Auth::user()->name}}
                                @endif</a>
                        </h5>
                        <span class="email">@if (Auth::check())
                            {{ Auth::user()->email}}
                            @endif</span>
                    </div>
                </div>
                <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                        <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                </div>
                <div class="account-dropdown__footer">
                    <a href="/logout">
                        <i class="zmdi zmdi-power"></i>Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div> --}}

    <div class="header-button">
        <div class="noti-wrap">
        </div>
        <div class="account-wrap">
            <div class="account-item clearfix js-item-menu">
                {{-- <div class="image">
                                <img src="backend/assets/images/icon/avatar-01.jpg" alt="John Doe" />
                            </div> --}}
                <div class="content">
                    <a class="js-acc-btn" href="#">{{Auth::guard('admin')->user()->name}}</a>
                </div>
                {{-- <div class="content">
                                <a class="js-acc-btn" href="#"></a>
                            </div> --}}
                <div class="account-dropdown js-dropdown">
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__footer">
                            <a href="{{route('admin.logout')}}">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</header>
