@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Phản Hồi Cho Chúng Tôi</h3>
            </div>
            <div class="card-body">
            @guest
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div>
                        <label for="feed_back">Nội dung</label> 
                        </div>     
                        <div>
                            <textarea id="subject" name="subject" placeholder="Write something.." class="w-100 p-3"></textarea>
                        </div>
                            <button type="submit" class="btn btn-success" style="float: right;margin-top: 6px;"> Gửi </button>     
                    </form>    
            @else
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control-plaintext" value="{{ $email = auth()->user()->email}}" readonly>
                        </div>
                        <div>
                        <label for="feed_back">Nội dung</label> 
                        </div>     
                        <div>
                            <textarea id="subject" name="subject" placeholder="Write something.." class="w-100 p-3"></textarea>
                        </div>
                            <button type="submit" class="btn btn-success" style="float: right;margin-top: 6px;"> Gửi </button>     
                    </form> 
            @endguest 
            </div>
        </div>
    </div>
@endsection