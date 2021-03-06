<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    @foreach($cate as $c)
                    <a class="dropdown-item" href="{{ url('listcate/cate-detail/'.$c->id) }}">{{ $c->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about-us') }}">Về chúng tôi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('feedback')}}">Phản hồi</a>
            </li>
        </ul>
        <form action="{{ asset('listcate/search') }}" method="post" class="form-inline my-2 my-lg-0">
        {{ csrf_field() }}
            <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</nav>