<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    @include('frontend.layouts.head')
</head>

<body>
@include('frontend.layouts.header')
<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    @if(isset($show_post))

                        <div class="blogShort">
                            <h1>{{$show_post->title}}</h1>
                            <img src="/image/product/{{ $show_post->image }}"
                                 alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                            <article><p style="">
                                    {{printf($show_post->content)}}
                                </p></article>


                            @else
                                @foreach ($list_post as $post)
                                    <div class="blogShort">
                                        <h1>{{$post->title}}</h1>
                                        <img src="/image/product/{{ $post->image }}"
                                             alt="post img"
                                             class="pull-left img-responsive thumb margin10 img-thumbnail">
                                        <div class="post-meta row">
                                            <div class="col-6">
                                                <p>Người Viết : {{$post->author->full_name}} / Lượt Xem
                                                    : {{$post->view}} .</p>

                                            </div>
                                            <div class="col-6">
                                                <a style="float: right"
                                                   href="{{route('single.show',['id' => $post->id]) }}">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{$list_post->links()}}
                            @endif
                        </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">

                    <div class="sidebar-widget">
                        <div class="search-widget">
                            <form>
                                <input class="form-control" type="text" placeholder="Tìm tin tức">
                                <button class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="widget-title">Tin tức mới</h2>
                        <div class="recent-post">
                            @foreach ($new_post as $posts)
                                <div class="post-item">
                                    <div class="post-img">
                                        <img src="/image/product/{{ $posts->image }}"/>
                                    </div>
                                    <div class="post-text">
                                        <a href="{{route('single.show',['id' => $posts->id]) }}">{{$posts->title}}</a>
                                        <div class="post-meta">
                                            <p>Người Viết<a href="">{{$posts->author->full_name}}</a></p>
                                            <p>Lượt Xem<a href="">{{$posts->view}}</a></p>
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
    <!-- Single Post End-->


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
