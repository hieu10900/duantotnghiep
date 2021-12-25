<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ba Vì Homestay</title>
    @include('frontend.layouts.head')
    <style>
            * {
              box-sizing: border-box;
            }
            
            body {
              margin: 0;
              font-family: Arial;
            }
            
            .header {
              text-align: center;
              padding: 32px;
            }
            
            .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              padding: 0 4px;
            }
            
            /* Create four equal columns that sits next to each other */
            .column {
              -ms-flex: 25%; /* IE10 */
              flex: 25%;
              max-width: 25%;
              padding: 0 4px;
            }
            
            .column img {
              margin-top: 8px;
              vertical-align: middle;
              width: 100%;
            }
            
            /* Responsive layout - makes a two column-layout instead of four columns */
            @media screen and (max-width: 800px) {
              .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
              }
            }
            
            /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
              }
            }
            </style>
</head>

<body>
    @include('frontend.layouts.header')
    <!-- Page Header Start -->
    <div class="carousel">
        <div class="">
            <div class="owl-carousel">
                @foreach ($data as $item)
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ $item->image }}" height="300px" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Booking Homestay</h3>
                        <h1>{{ $item->content }}</h1>
                        <!-- <p>
                            Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula
                            euismod quam
                        </p> -->
                        <a class="btn btn-custom" href="">Tìm hiểu thêm</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <h2>Chào Mừng đến với Ba Vì Homestay!</h2>
                            <p>Đôi lời về chúng tôi</p>
                        </div>
                        <div class="about-content">
                            <p>
                                Ba Vì Homestay tọa lạc ở Ba Vì, thuận lợi di chuyển từ Hà Nội và các tỉnh lân cận. Dễ dàng đến thăm các địa điểm nổi tiếng như Khu Du lịch Khoang Xanh Suối Tiên, Thác Bạc, Vườn Quốc Gia Ba Vì
                             </p>
                             <p>
                                Xuất phát từ ý tưởng mang đến một trải nghiệm nghỉ dưỡng đẳng cấp như resort với chi phí bằng homestay, Ba Vì là chuỗi các biệt thự lớn nhỏ với thiết kế hiện đại, tiện nghi đầy đủ giữa bao la xanh tươi.
                             </p>
                             <span>Một cuộc trốn chạy thú vị cùng với người thương yêu của bạn.</span>
                             <span>
                                Ba Vì Lodge: biệt thự ven hồ
                             </span>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('frontend_assets/img/bannersinger.jpg') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        
        <!--edit   -->
        <div class="row"> 
            <div class="column">
             
              <img src="{{ asset('frontend_assets/./img/2.jpg') }}" style="width:100%">
             
              <img src="{{ asset('frontend_assets/./img/3.jpg') }}" style="width:100%">
            </div>
            <div class="column">
              <img src="{{ asset('frontend_assets/./img/4.jpg') }}" style="width:100%">
              <img src="{{ asset('frontend_assets/./img/3.jpg') }}" style="width:100%">
              
              
            </div>  
            <div class="column">
          
              <img src="{{ asset('frontend_assets/./img/5.jpg') }}" style="width:100%">
            
            </div>
            <div class="column">

   
                <img src="{{ asset('frontend_assets/./img/4.jpg') }}" style="width:100%">
              </div>
          </div>
           <!--edit   -->
        



         
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Bài viết mới nhất</p>
                <h2>Thông tin về Homestay</h2>
            </div>
            <div class="row">
                @foreach ($post as $item)
                <div class="col-md-4">
                    <div class="price-item-left featured-item">
                       
                        <div class="price-body">
                            <div class="section-header ">
                               <a href="">
                                <p>Bài Viết Mới</p>
                                <h2>{{ $item->title }}</h2>
                               </a>
                            </div>
                            <div class="about-content">
                            {!! $item->content !!}
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="{{route('single.show',['id' => $item->id]) }}">xem ngay</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    <!-- Price End -->


    @include('frontend.layouts.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend_assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <!--jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--slick slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider-team').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
    <!--michelsnik-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>