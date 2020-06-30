<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Styles -->
    <style>
.topbar{
background-color: #212529;
padding: 0;
}
.topbar .container .row {
margin:0px;
padding:0;
}

.topbar .container .row .col-md-12 { 
padding:0;
}

.topbar p{
margin:0;
display:inline-block;
font-size: 13px;
color: #f1f6ff;
}

.topbar p > i{
margin-right:5px;
}
.topbar p:last-child{
text-align:right;
} 
.topbar li.topbar {
display: inline;
padding-right: 18px;
line-height: 52px;
transition: all .3s linear;
}

.topbar li.topbar:hover {
color: #1bbde8;
}

.topbar ul.info i {
color: #131313;
font-style: normal;
margin-right: 8px;
display: inline-block;
position: relative;
top: 4px;
}

.topbar ul.info li {
float: right;
padding-left: 30px;
color: #ffffff;
font-size: 13px;
line-height: 44px;
}

.topbar ul.info i span {
color: #aaa;
font-size: 13px;
font-weight: 400;
line-height: 50px;
padding-left: 18px;
}
    </style>
</head>
<body class="bg-light">
    
    <div class="container-fuild">
                <header>           
                @include('layouts\topbar')  
                @include('layouts\nav-bar')
                </header>
                <main class="py-4">
                    @yield('content')
                </main>
    </div>
    <footer>
    @include('layouts\footer')
    </footer>
            </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
