<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ba Vì Homestay</title>
    @include('frontend.layouts.head')
</head>
<style>
    h3.price-detail {
    text-align: center;
    padding-top:64px;
}
  .team-item {
    padding-bottom: 25px;
    box-shadow: 0px 15px 30px rgba(62, 86, 238, 0.15);
  }
  .team-img img{
      width: 100%;
      height: 270px;
  }
  .team-text {
    text-align: center;
  }
  .section-header p::after{
      width: 50%;
  }
  h2.textct {
    margin-top: -65px;
    color: #ffff;
    font-size: 28px;
    font-weight: 400;
    white-space: nowrap;
}
h2.textct:hover{
    color: #CF9D6C;
    transition: all .3s ease;
}
.blog .pagination {
    margin-bottom: 15px;
    padding-top: 57px;
}
.button-link.button-xs {
    font-size: 10px;
}
.section-header p::after {
    position: absolute;
    content: "";
    width: 50%;
    height: 2px;
    left: 25%;
    bottom: 0;
    background: #cf9d6c;
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
.col-lg-4.all-product {
    margin-top: 3rem;
}
h3.price-detail span {
    margin: 10px;
}
.col-lg-3.all-product {
    margin-bottom: 32px;
}
}
.col-lg-3.all-product{

}
</style>  

<body>
    @include('frontend.layouts.header')
    
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>HOMESTAY Lodge Villa 20</p>
                <h2>{{ $Romm_types->name }}</h2>
            </div>
            <div class="row">
            @foreach ($ListRooms as $item)
            <div class="col-lg-3 all-product">
                    <div class="team-item">
                        <div class="team-img">
                        <img src="{{ config('app.base_url') . $item->feature_image_path	 }}" alt="Image">
                        </div>
                        <div class="team-text">
                            <h2 class="textct">{{ $item->name_room }}</h2>
                            <h3 class="price-detail"><span class="title-price">Từ</span>{{ number_format($item->price) }}₫<span class="unit">Đêm</span></h3>
                            <div class="button-link button-xs"><a href="{{ route('room_detail', [ 'id' => $item->id ])}}">xem chi tiết <i class="fas fa-long-arrow-alt-right"></i></a>

                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            
        </div>
    </div>
    <!-- Blog End -->


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