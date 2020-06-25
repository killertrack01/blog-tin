<!-- Lưu tại resources/views/admin/index.blade.php -->
@extends('admin.layout.master')
@section('title', 'admin index')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h1>Chào mừng đến với trang Admin</h1>
            </div>
<!-- Box body -->
            <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-4">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Thành viên</h3>

                                    <p>T-Blog</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-people-outline"></i>
                                </div>
                                <a href="{{ url('admin/member/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <!-- ./col -->
                            <div class="col-lg-3 col-4">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Thể loại</h3>

                                    <p>T-Blog</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-list-outline"></i>
                                </div>
                                <a href="{{ url('admin/category/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>Bài viết</h3>

                                <p>T-Blog</p>
                            </div>
                            <div class="icon">
                                <i class="ion-social-designernews"></i>
                            </div>
                            <a href="{{ url('admin/post/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>Bài chờ</h3>

                                <p>T-Blog</p>
                            </div>
                            <div class="icon">
                                <i class="ion-ios-reload"></i>
                            </div>
                            <a href="{{ url('admin/userpost/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-4">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>Admin</h3>

                                    <p>T-Blog</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ url('admin/control-admin/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <!-- ./col -->
                            <div class="col-lg-3 col-4">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Comment</h3>

                                    <p>T-Blog</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-android-textsms"></i>
                                </div>
                                <a href="{{ url('admin/comment/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-4">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>Feedback</h3>

                                <p>T-Blog</p>
                            </div>
                            <div class="icon">
                                <i class="ion-android-mail"></i>
                            </div>
                            <a href="{{ url('admin/feedback/list') }}" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- ./col -->
                        </div>
                    </div>
            </div>
<!-- ./Box body -->
            </div>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
