<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3 text-right">
                            @guest
                            <div class="row float-right">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a>
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                            @endif
                            </div>
                            @else
                            <div class="nav-item dropdown float-right d-inline">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="nav-icon fas fa-user"> Thông Tin</i>
                                <span class="badge badge-warning navbar-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                            <a class="dropdown-item" href="{{ route('info') }}">{{ __('Thông tin cá nhân') }}</a>
                            @if ((Auth::user()->role =='0')||(Auth::user()->role =='2'))
                            <a class="dropdown-item" href="{{ route('admin') }}">{{ __('Dashboard Admin') }}</a>
                            @else (Auth::user()->role =='1')
                            <a class="dropdown-item" href="{{ route('post') }}">{{ __('Đăng bài') }}</a>
			    <a class="dropdown-item" href="{{ route('listpost') }}">{{ __('Danh sách bài cá nhân') }}</a>
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