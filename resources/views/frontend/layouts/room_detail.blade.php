<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <title>Document</title>
    @include('frontend.layouts.head')
    <style>
        .form_group {
            top: 100px;
            position: sticky;
            margin-top: 2.5rem;
            background-color: rgba(0, 120, 10, 0.2);
            padding: 40px 22px 40px 40px;
            border-radius: 8px;
            box-shadow: 0px 15px 30px rgba(62, 86, 238, 0.15);
        }

        .form-control {
            border-radius: 36px;
        }
        .button-link.button-xs {
        font-size: 10px;
        }
        .wattage {
         padding-top: 20px;
        }
        label.form-label {
        color: #cf9d6c;
        font-weight:500;
      }
        .form-control:hover {
            border: 1px solid rgb(0, 255, 106);
        }

        .form-control.text:focus {
            background: rgb(217, 255, 0);
        }

        /* .form-control-select {
            padding: 25px;
         } */
        .form-label {
          color: #cf9d6c;
        font-weight:500;
        }

        .submit-btn {
            width: 100%;
            background-color: orange;
            border-radius: 2rem;
            padding: 10px;
            color: white;
            font-weight: 600;
            border: none;
        }

        .submit-btn:hover {
            background-color: rgba(0, 255, 64, 0.5);
        }

        .nav-tabs .nav-link {
            margin-right: 16px;
            padding: 8px 0px;
            background-color: white;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 5px solid rgba(131, 64, 2, 0.979) !important;
        }

        .nav-link:hover {
            border: none;
        }
        h3.price-detail {
    text-align: center;
    padding-top:100px;
}
  .team-item {
    padding-bottom: 25px;
    box-shadow: 0px 15px 30px rgba(62, 86, 238, 0.15);
  }
  .team-img img{
      width: 100%;
      height: 271px;
  }
  .team-text {
    text-align: center;
  }
  .section-header p::after{
      width: 50%;
  }
  h2.textct {
    margin-top: -75px;
    color: #ffff;
    font-size: 2.5rem;
    font-weight: 400;
}
h2.textct:hover{
    color: #CF9D6C;
    transition: all .3s ease;
}
.blog .pagination {
    margin-bottom: 15px;
    padding-top: 57px;
}
.button-link.button-xs{
    padding: 0;
    border-radius: 0;
    text-align: center;
    font-weight: 700;
    text-transform: uppercase;
    color: #CF9D6;
}

span.unit{
    font-size: .875rem;
    text-transform: uppercase;
    font-weight: 400;
}

h3.price-detail span {
    margin: 10px;
}
.detail {
    padding-left: 75px;
    padding-right: 75px;
}
div#list-product-same {
    padding-left: 32px;
    padding-right: 75px;
}
.wattage h2 {
    padding: 20px;
    font-weight: 600;
    transition: auto;
}
.wattage p {
    color: #182135;
    font-weight: 500;
    font-size: 1.1rem;
}
.header-product h2 {
    padding: 20px;
    font-weight: 600;
    transition: auto;
}
.name-title-top {
    padding-top: 20px;
    line-height: normal;
    font-size: 16px;
    font-weight: 600;
    margin: 10px;
}
.form h3 {
    text-align: center;
    font-weight:500;
    color: #e4930f;
}
span.preice {
    font-size: 30px;
    color: #ff9000;
    font-family: 'os_bold';
}
h2.price-detail {
    margin: 10px;
}
.name-title-top a{
  color: #6ba9ec;
}
.name-title-top a:hover{
  color: #CF9D6C;
}
i.fas.fa-hotel {
    margin-left: -19px;
    color: #ecaf6b;
    font-size:20px
}
.cmt h2 {
    font-size: 2rem;
    margin-left: -5px;
    margin-bottom: 29px;
    font-weight: 500;
    color: chocolate;
}
.cmt {
    padding-top: 2rem;
}
i.fas.fa-hands-helping{
    margin-left: -34px;
    color: #ecaf6b;
    font-size: 20px;
}
}
    </style>
</head>

<body>
@include('frontend.layouts.header')
<!-- Nav Bar End -->
<div class="">
    <div class="detail">
        <div class="row">
        <div class="col-8">
       <div class="name-title-top" >  <a href="{{ route('home') }}">Home ></a> <a href="{{ $Room_detail->room_type }}">
         {{ $cate_name }} ></a> <a href="{{ route('room_detail', [ 'id' => $Room_detail->id ])}}">{{ $Room_detail->name }}</a></div>
          <h2 class="price-detail"><span>Từ</span><span class=preice> {{ number_format($Room_detail->price) }}  </span>VND  <span></h2>
          <div class="container">
          <div class="slide-detail">
              <div class="mySlides">
                <div class="numbertext">1 / {{ $tong }}</div>
                <img src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}" style="width: 101%; height: 500px;" />
              </div>
              @foreach ($Image_room as $key => $item)
              <div class="mySlides">
                <div class="numbertext">{{ $key + 2 }} / {{ $tong }}</div>
                <img src="{{ config('app.base_url') . $item->image	 }}" style="width: 100%; height: 500px;" />
              </div>
              @endforeach

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
              <div class="row mr-0 mt-3">
                <div class="col-2">
                  <img class="demo cursor" src="{{ config('app.base_url') . $Room_detail->feature_image_path	 }}" style="width: 140px; height: 90px;" onclick=" currentSlide(1)" alt="Cinque Terre" />
                </div>
                @foreach ($Image_room as $key => $item)
                <div class="col-2">
                  <img class="demo cursor" src="{{ config('app.base_url') . $item->image	 }}" style="width: 140px; height: 90px;" onclick="currentSlide({{ $key + 2 }} )" alt="Cinque Terre" />
                </div>
                @endforeach
              </div>
            </div>
            <div class="mt-4">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <div class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"  role="tab" aria-controls="nav-home" aria-selected="true">
                    Chi tiết
                  </div>
                  <div class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                    Nhận xét
                  </div>
                  <div class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"  role="tab" aria-controls="nav-contact" aria-selected="false">
                    Liên hệ
                  </div>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="wattage">
                  <h2> <i class="fas fa-hotel"></i>  {{ $Room_detail->name }}</h2>
                   {!! $Room_detail->introduce_of_room !!}
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="wattage">
                    <form action="{{ route('add_comment', [ 'id' => $Room_detail->id ]) }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                  </div>
                  <div class="cmt">
                    <h2>Tất cả bình luận</h2>


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Ngày bình luận</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($listComments as $key => $item)
                          <tr>
                            <th scope="row">{{$key + 1 }}</th>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                            @if(Auth::check())
                        @if(auth()->user()->id == $item->created_by)
                        <form action="{{ route('remove-comment', [ 'id' => $item->cmt_id ])}}" method="POST">
                          @csrf
                          <button type="submit" style="float:right;font-size:10px">Xoa</button>
                        </form>
                        @endif
                        @endif
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="wattage">
                    <p>Công suất 3 người lớn</p>
                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                    <p>Nhà vệ sinh chung (gồm 2 tắm + 2 wc)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="col-4">
                <div class="form_group">
                    <div class="form">
                        <h3> Thông tin đặt Homestay</h3>
                        <div id="booking" class="section">
                            <div class="section-center">
                                <div class="">
                                    <div class="row mr-0">
                                        <div class="booking-form">
                                            <form method="POST" action="">
                                                @csrf
                                                <input type="hidden" id="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" id="post_id" value="{{ $Room_detail->id }}">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                                    <input placeholder="Email address" type="email"
                                                           class="form-control text" id="exampleInputEmail1"
                                                           aria-describedby="emailHelp"/>
                                                    <span class="text-danger" id="emailError"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleName" class="form-label">Họ tên</label>
                                                    <input placeholder="Name" type="text" class="form-control text"
                                                           id="exampleName" aria-describedby="textHelp"/>
                                                    <span class="text-danger" id="nameError"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="examplePhone" class="form-label">Số điện thoại</label>
                                                    <input placeholder="Phone" type="text" class="form-control text"
                                                           id="examplePhone" aria-describedby="textHelp"/>
                                                    <span class="text-danger" id="phoneError"></span>
                                                </div>
                                                <div class="check">
                                                <div class="row mr-0">
                                                    <div class="col-md-6 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Ngày đến</span>
                                                            <input class="form-control" type="date" id="checkIn"
                                                                   placeholder=""/>
                                                        </div>
                                                        <span class="text-danger" id="check_inError"></span>
                                                    </div>
                                                    <div class="col-md-6 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Ngày đi</span>
                                                            <input class="form-control" type="date" id="checkOut"
                                                                   placeholder=""/>
                                                            <span class="text-danger" id="check_outError"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                        </div>
                                                <div class="row mr-0">
                                                    <div class="col-md-12 pr-0">
                                                        <div class="form-group">
                                                            <span class="form-label">Adults</span>
                                                            <select class="form-control" id="amount_of_people">
                                                                <option value = "1">1</option>
                                                                <option value = "2" >2</option>
                                                                <option value = "3">3</option>
                                                                <option value = "4">4</option>
                                                                <option value = "5">5</option>


                                                            </select>
                                                            <span class="select-arrow"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Services</span>
                                                    <select class="form-control" id="services" name="services" required
                                                            multiple="multiple">                                                  
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="examplePhone" class="form-label">Discount</label>
                                                    <input placeholder="Discount" type="text" class="form-control text"
                                                           id="exampleDiscount" aria-describedby="textHelp"/>
                                                </div>
                                            </form>
                                            <div class="form-btn">
                                                <button id="bookings" class="submit-btn">
                                                    Đặt ngay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-product-same" id="list-product-same">
        <div class="header-product">
          <h2 class="c-title"> <i class="fas fa-hands-helping"></i> Có thể bạn cũng thích </h2>
        </div>
        <div class="c-box_list">
          <div class="swiper-container  c-swipper-relate">
            <div class="swiper-wrapper row">
              @foreach ($splq as $item => $value)
              <div class="col-lg-3">
                    <div class="team-item">
                        <div class="team-img">
                        <img src="{{ config('app.base_url') . $value->feature_image_path	 }}" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2 class="textct">{{ $value->name_room }}</h2>
                            <h3 class="price-detail"><span class="title-price">Từ</span>{{ number_format($value->price) }}₫<span class="unit">Đêm</span></h3>
                            <div class="button-link button-xs"><a href="{{ route('room_detail', [ 'id' => $value->id ])}}">xem chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

@include('frontend.layouts.footer')
@include('frontend.layouts.js')

<!--michelsnik-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('css/lib/easing/easing.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="{{ asset('css/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('css/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('css/lib/counterup/counterup.min.js') }}"></script>

  <!-- Contact Javascript File -->
  <script src="{{ asset('css/mail/jqBootstrapValidation.min.js') }}"></script>
  <script src="{{ asset('css/mail/contact.js') }}"></script>
  <!-- Template Javascript -->
  <script src="{{ asset('css/js/main.js') }}"></script>
  <script src="{{ asset('css/js/detail.js') }}"></script>

</body>

</html>
