<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <i class="fas fa-phone"> 123-466-789</i>
            </div>

            <div class="col-md-10">
                <i class="fas fa-envelope">nohope@gmail.com</i>
                <div class="nav-item dropdown float-right d-inline">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="nav-icon fas fa-user"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                            </li>
                            @endif
                            @else
                            <a class="dropdown-item" href="{{ route('info') }}">{{ __('Thông tin cá nhân') }}</a>
                            @if ((Auth::user()->role =='0')||(Auth::user()->role =='2'))
                            <a class="dropdown-item" href="{{ route('admin') }}">{{ __('Dashboard Admin') }}</a>
                            @else (Auth::user()->role =='1')
                            <a class="dropdown-item" href="{{ route('post') }}">{{ __('Đăng bài') }}</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endguest
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>