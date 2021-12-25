<!DOCTYPE html>
<html lang="en">
<style>
    .section-header h2 {
    margin: 0;
    font-size: 45px;
    font-weight: 700;
    text-transform: capitalize;
    font-size: x-large !important;
}
.about-content {
    font-weight: 500;
}
.slider-content figure {
    width: 100%;
    height: 90px;
    /* border: 1px solid #555; */
    overflow: hidden;
    position: absolute;
}
</style>
<head>
    <title>Ba Vì Homestay</title>
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
                        <a href=""><img src="/image/product/{{ $post->image }}" alt="Image"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>Bài viết về Homestay mới nhất</p>
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="about-content">
                    {!! $post->content !!}
                        <a class="btn btn-custom" href="{{route('single.show',['id' => $post->id]) }}">Tìm hiểu thêm</a>
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
                <h2>Danh Mục HomeStay</h2>
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
                <p>CÁC HOẠT ĐỘNG GIẢI TRÍ TẠI BA VÌ</p>
                <h2>Đến Ba Vì chơi gì?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('frontend_assets/img/bbq tc.jpg') }}" alt="Image">

                        </div>
                        <div class="blog-text">
                            <h3 style="text-align: center;"><a href="#">Pool party - BBQ ngoài trời</a></h3>
                            <p style="text-align: center;">
                            Tour BBQ ngoài trời Ami Homestay là một trải nghiệm tương tác & độc đáo thực sự.
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
                            <h3 style="text-align: center;"><a href="#">Chèo thuyền kayak</a></h3>
                            <p style="text-align: center;">
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
                            <h3 style="text-align: center;"><a href="#">Tham quan</a></h3>
                            <p style="text-align: center;">
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
                <h2>BA VÌ Lodge & Cottage: biệt thự ven hồ”</h2>
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
                <p>PHÒNG TRƯNG BÀY</p>
                <section>
                    <div class="rt-container">
                        <div class="col-rt-12">
                            <div class="Scriptcontent">

                                <!-- 3D Image Slideshow HTML -->
                                <section class="slideshow">
                                    <div class="content">
                                        <div class="slider-content">
                                            @foreach ($room as $item)
                                            <figure class="shadow">
                                                <a href="{{ route('room_detail', [ 'id' => $item->id ])}}"><img src="{{ asset($item->feature_image_path) }}"></a>
                                            </figure>
                                            @endforeach
                                            <!-- <figure class="shadow">
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
                                            </figure> -->
                                        </div>
                                    </div>
                                </section>
                                <!-- End 3D Image Slideshow HTML -->

                            </div>
                        </div>
                    </div>
                    <p>Bài Viết Liên Quan</p>
                </section>
            </div>

            <div class="row">
                <div class="col-md-4">
                <div class="price-item-left featured-item">
                        <div class="price-body">
                            <div class="section-header ">
                                <!-- <p>About Us</p> -->
                                <h2>{{ $post->title }}</h2>
                            </div>
                            <div class="about-content">
                            {!! $post->content !!}
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="{{route('single.show',['id' => $post->id]) }}">Xem ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-body">
                        <img style="width: 100%" src="/image/product/{{ $post_new->image }}" alt="">

                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item-left featured-item">
                        <div class="price-body">
                            <div class="section-header ">
                                <!-- <p>About Us</p> -->
                                <h2>{{ $post_new->title }}</h2>
                            </div>
                            <div class="about-content">
                            {!! $post_new->content !!}
                            </div>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="{{route('single.show',['id' => $post->id]) }}">Xem ngay</a>
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