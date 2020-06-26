<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ url('logo/logo.png') }}" alt="logo website" height="100px" width="150px" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Trang chủ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Loại tin tức
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">PC</a>
                    <a class="dropdown-item" href="#">Laptop</a>
                    <a class="dropdown-item" href="#">Mobile</a>
                    <a class="dropdown-item" href="#">Thiết bị ngoại vi</a>
                    <!--<div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> để làm điều kiện bao nhiêu sẽ tự xuống và chia ra 
                nhưng trước mắt cứ để cứng về sau sẽ set động lại -->
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('blog/about-us/') }}">Về chúng tôi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('feedback')}}">Phản hồi</a>
            </li>
        </ul>
    </div>
</nav>