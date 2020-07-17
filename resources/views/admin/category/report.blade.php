<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!---->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body>
    <div class="card-header bg-dark">
        <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Danh sách thể loại bài viết </h2>
    </div>
    <table id="listcate" class="table table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th>#ID</th>
                <th>Tên loại bài</th>
                <th>Mô tả bài</th>
                <th>Ngày tạo</th>
                <th>Ngày chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($report as $c)
            <tr>
                <td class="align-middle">{{$c->id}}</td>
                <td class="align-middle">{{$c->name}}</td>
                <td class="align-middle">{{$c->description}}</td>
                <td class="align-middle">{{$c->created_at}}</td>
                <td class="align-middle">{{$c->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
        <br>
    </table>
</body>

</html>