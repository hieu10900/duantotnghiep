<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('frontend.layouts.head')
</head>
<style>
    .service .service-item i {
    font-size: 40px;
}
</style>
<body>
    @include('frontend.layouts.header')
    <!-- Carousel Start -->
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
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div data-aos="fade-down" class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend_assets/img/baner tc.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>Chào mừng bạn đến với An vui!</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Dịch vụ homestay nghỉ dưỡng cho bạn phút giây hạnh phúc trọn vẹn bên bạn bè và người thân!
                        </p>
                        <p>“An Vui mang đến cho bạn những trải nghiệm lí tưởng như tại resort đẳng cấp với chi phí chỉ
                            bằng homestay. Khu biệt thự là sự kết hợp hoàn hảo giữa thiết kế hiện đại, đa dạng tiện ích
                            và thiên nhiên nhiên thơ mộng. Đến với An Vui, bạn có thể hoà mình vào không gian sinh thái
                            xanh bát ngát, tận hưởng một cuộc trốn chạy thú vị cùng người bạn thương yêu.</p>
                        <p>AN VUI Lodge & Cottage: biệt thự ven hồ”</p>
                        <a class="btn btn-custom" href="">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End edit -->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Danh Sách HomeStay</h2>
                <p>Hàng loạt lựa chọn phù hợp với yêu cầu</p>

            </div>
            <div class="row slider-team">

                @foreach ($category as $item)
                <div class="col-lg-12 col-md-12">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ $item->image }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2 class="textct">{{ $item->name }}</h2>
                            <div class="button-link button-xs"><a href="{{ route('room_type', [ 'id' => $item->id ]) }}">xem chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>

                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>CÁC HOẠT ĐỘNG GIẢI TRÍ TẠI AN VUI</p>
                <h2>Đến An Vui chơi gì?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend_assets/img/bbq tc.jpg') }}" alt="Image">

                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Pool party - BBQ ngoài trời</a></h3>
                            <p>
                                Ami Homestay outdoor BBQ tour is a truly unique & interactive experience.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend_assets/img/cheothuyen tc.jpg') }}" alt="Image">

                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Chèo thuyền kayak</a></h3>
                            <p>
                                mặt hồ rộng bao quanh bởi núi Ba Vì
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend_assets/img/thamquan tc.jpg') }}" alt="Image">

                        </div>
                        <div class="blog-text">
                            <h3><a href="#">Tham quan</a></h3>
                            <p>
                                Vườn Quốc Gia Ba Vì
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End edit -->
    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <h2>AN VUI Lodge & Cottage: biệt thự ven hồ”</h2>
                <p>HỆ THỐNG TIỆN ÍCH ĐA DẠNG</p>
            </div>
            <div  class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Bảo vệ 24/7</h3>
                        <p>Đảm bảo trải nghiệm của quý khách an toàn và trọn vẹn</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-child"></i>
                        <h3>Sân chơi trẻ em</h3>
                        <p>Rộng rãi và gần gũi với thiên nhiên</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-swimmer"></i>
                        <h3>Hồ tự nhiên</h3>
                        <p>Villa nằm ven hồ tự nhiên mang đến nhiều dịch vụ giải trí cho quý khách</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-utensils"></i>
                        <h3>Nhà hàng</h3>
                        <p>Mang đến những bữa ăn dã ngoại phong phú</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-parking"></i>
                        <h3>Bãi Đỗ Xe</h3>
                        <p>Đảm bảo trải nghiệm của quý khách an toàn và trọn vẹn</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-fish"></i>
                        <h3>Câu Cá & Chèo Thuyền</h3>
                        <p>Rộng rãi và gần gũi với thiên nhiên</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-fire-alt"></i>
                        <h3>Lửa Trại & Bếp BBQ</h3>
                        <p>Villa nằm ven hồ tự nhiên mang đến nhiều dịch vụ giải trí cho quý khách</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-motorcycle"></i>
                        <h3>Dã Ngoại</h3>
<p>Mang đến những bữa ăn dã ngoại phong phú</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End edit -->
    <!-- Price Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Gallery</p>
                <section>
                    <div class="rt-container">
                        <div class="col-rt-12">
                            <div class="Scriptcontent">

                                <!-- 3D Image Slideshow HTML -->
                                <section class="slideshow">
                                    <div class="content">
                                        <div class="slider-content">
                                            <figure class="shadow">
                                                <img src="{{ asset('frontend_assets/img/beboi1.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/beboi2.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/beboi3.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/beboi4.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/beboi5.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/ct1.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/ct2.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/ct3.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/ct4.jpg') }}">
                                            </figure>
                                            <figure class="shadow"><img src="{{ asset('frontend_assets/img/ct5.jpg') }}">
                                            </figure>
                                        </div>
                                    </div>
                                </section>
                                <!-- End 3D Image Slideshow HTML -->

                            </div>
                        </div>
                    </div>
                    <p>READ OUR BLOG</p>
                </section>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="price-item-left featured-item">
                        <div class="price-body">
                            <div class="section-header ">
                                <!-- <p>About Us</p> -->
                                <h2>An Vui Lodge & Cottage – An Vui đâu cần tìm nơi</h2>
                            </div>
                            <div class="about-content">
                                <p>
                                    An Vui Lodge & Cottage là tổ hợp biệt thự và bungalow nghỉ dưỡng ra đời vào tháng
                                    09/2018, cung cấp điểm nghỉ dưỡng cuối tuần ở ngoại thành Hà…
                                </p>

                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">

                        <div class="price-body">
                            <img style="width: 100%" src="{{ asset('frontend_assets/./img/6.jpg') }}" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item-left featured-item">

                        <div class="price-body">
                            <div class="section-header ">
                                <!-- <p>About Us</p> -->
                                <h2>Nghỉ lễ 2/9, dân tình rủ nhau mở “pool party”</h2>
                            </div>
                            <div class="about-content">
                                <p>
                                    Một chuyến đi ngắn ngày đến nghỉ ngơi ở homestay hoặc villa ở ngoại thành Hà Nội là
                                    lựa chọn mà nhiều người yêu thích trong dịp nghỉ lễ ngắn…
                                </p>


                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">Xem ngay</a>
                        </div>
                    </div>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.slider-team').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
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