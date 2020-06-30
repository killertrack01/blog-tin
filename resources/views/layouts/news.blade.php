<section>
<style>
small { 
  font-size: smaller;
}
* {box-sizing: border-box;}

    .container-img {
      position: relative;
    }

    .image {
      display: block;
      width: 100%;
      height: auto;
    }

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  padding: 20px;
  text-align: center;
}

    .container-img:hover .overlay {
      opacity: 1;
    }
  </style>
  <div class="card" style="background-color:#fefbd8;">
    <div class="card-header card-title text-center" style="background-color:#FFF68F; text-color:Light">
      <h5><b>TIN TỨC MỚI</b></h5>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-md-3" style="margin-top:10px">
        <div class="container-img">
        <img src="{{ asset('/images/anh.png')}}" width=300 height=300>
        <div class="overlay">
            <a href="#">
                <i>Top 5 Laptop doanh nhân tốt nhất</i>
            </a>
            <small>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<a href="#">Xem thêm...</a></small>
        </div>
        </div>
    </div>
    <div class="col-md-3" style="margin-top:10px">
        <div class="container-img">
        <img src="{{ asset('/images/login.jpg')}}" width=300 height=300 >
        <div class="overlay"><a  href="#"><i>tieu de</i></a></div>
        </div>
    </div>
    <div class="col-md-3" style="margin-top:10px">
        <div class="container-img">
        <img src="{{ asset('/images/anh.png')}}" width=300 height=300 >
        <div class="overlay"><a  href="#"><i>tieu de</i></a></div>
        </div>
    </div>
    <div class="col-md-3" style="margin-top:10px">
        <div class="container-img">
        <img src="{{ asset('/images/anh.png')}}" width=300 height=300 >
        <div class="overlay"><a  href="#"><i>tieu de</i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>