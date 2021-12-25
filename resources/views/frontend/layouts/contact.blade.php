        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Ba Vì Homestay</title>
            @include('frontend.layouts.head')
        </head>
        <style>
            .contact .contact-info {
            width: 100%;
            margin-bottom: 45px;
            padding: 35px 30px 10px 30px;
            border-radius: 5px;
            background: #cf9d6c;
        }
                .friday{
                    white-space: nowrap;
                }
        </style>
        <body>
            @include('frontend.layouts.header')
            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Tư vấn đặt homestay</p>
                        <h2>Thông tin liên hệ</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info">
                                <h2>Thông tin của chúng tôi</h2>
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3>Giờ mở cửa</h3>
                                        <p class="friday">Thứ 2 -> Chủ nhật, 8:00 - 23:00</p>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3>Số điện thoại</h3>
                                        <p>0363338104</p>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h3>Email</h3>
                                        <p>hieubmph10900@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="{{ route('contact.store') }}" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                                    @csrf
                                    <div class="control-group">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Họ tên" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    
                                    </div>
                                    <div class="control-group">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="number" class="form-control" name="phone" id="phonenumber" value="{{ old('phone') }}" placeholder="Số điện thoại" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    
                                    </div>
                                    <div class="control-group">
                                    @error('subject')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Tiêu đề" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                
                                    </div>
                                    <div class="control-group">
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <textarea class="form-control" name="message" id="message" value="{{ old('message') }}" placeholder="Ghi chú" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                
                                    </div>
                                    <div>
                                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Gửi thông tin liên hệ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.5695706327424!2d105.3885727146582!3d21.08984688596536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313461542bb47287%3A0xfc1784f698c57611!2zVsaw4budbiBxdeG7kWMgZ2lhIGJhIHbDrA!5e0!3m2!1svi!2s!4v1639714323797!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

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