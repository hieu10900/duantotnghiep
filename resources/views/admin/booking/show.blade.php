                            @extends('admin/layout_master/layout_master')
                            @section('contents')
                                {{--    <body class="A4">--}}
                                {{--    <div class="mx-auto contentpaneopen sheet padding-10mm">--}}
                                {{--        <div style="padding-left: 50px" class="mx-auto mt-2">--}}
                                {{--            <div>--}}

                                {{--            </div>--}}
                                {{--            <b>75A Hiep Binh street, Hiep Binh Phuoc ward, Thu Duc district, HCMC.</b><br>--}}
                                {{--            <b>Tel: 028 71 003000</b>--}}
                                {{--        </div>--}}
                                {{--        <div class="customer_info" style="padding-top:3rem;float: left;width: 100%">--}}
                                {{--            <p style="font-size: 28px;text-transform: uppercase;text-align:center"><b class="title">Phiếu Thanh Toán</b>--}}
                                {{--            </p>--}}

                                {{--            <div style="width: 83%" class="mx-auto mt-5">--}}
                                {{--                <p>Kính gửi: <b>{{$show_booking->guest_name}}</b>--}}
                                {{--                </p>--}}

                                {{--                <p>Trước tiên, Homestay Ba Vì chân thành cám ơn Quý khách Hàng đã sử dụng dịch vụ của chúng tôi, tin--}}
                                {{--                    chọn Ba Vì trong chuyến--}}
                                {{--                    ghé thăm BA VÌ. </p>--}}
                                {{--                <p> Homesaty Ba Vì xin gửi Quý khách thông tin các dịch vụ như sau:--}}
                                {{--                </p>--}}
                                {{--                <div style="margin-left: 30px">--}}
                                {{--                    <p>- Phòng Quý Khách Đã Đặt : <b>{{$show_booking->room->name}} .</b>--}}
                                {{--                    <p>- Giá Phòng : <b>{{$show_booking->room->price}} VND</b>.--}}
                                {{--                    <p>- Các Dịch Vụ Đã sử Dụng:</p>--}}
                                {{--                    <div style="margin-left: 30px">--}}
                                {{--                        @foreach($show_booking->service as $service)--}}
                                {{--                            <p> -<b> {{$service->name}}  : {{$service->price}} VND </b>. </p>--}}
                                {{--                        @endforeach--}}
                                {{--                    </div>--}}
                                {{--                    @if($show_booking->discount != null)--}}
                                {{--                        <p>Mã Khuyến Mại Được Sử Dụng :--}}
                                {{--                        @foreach($show_booking->discount as $discount)--}}
                                {{--                           <b> {{$discount->full_name}} : {{$discount->discount_rate}} VND</b>.--}}
                                {{--                        @endforeach--}}
                                {{--                        </p>--}}
                                {{--                    @endif--}}
                                {{--                    <p>Tổng Tiền         : <b>{{$service_price + $show_booking->room->price }} VND</b>.  </p>--}}
                                {{--                    <p>Số tiền được giảm : <b>{{$discount_rate}}</b> VND.  </p>--}}
                                {{--                    <p>Phải trả          : <b>{{$service_price + $show_booking->room->price - $discount_rate}} VND </b>.  </p>--}}
                                {{--                </div>--}}
                                {{--                <p>Ngoài ra, khi Anh/ Chị giới thiệu khách Hàng khác đến Homestay, anh/chị sẽ nhận được--}}
                                {{--                    các phần quà đặc biệt của Homesaty.</p>--}}
                                {{--                <p>Homestay Ba Vì kính chúc anh/chị luôn tràn ngập niềm vui và thật nhiều sức khỏe!</p>--}}
                                {{--            </div>--}}
                                {{--            <div class="row pt-3">--}}
                                {{--                <div class="col-6"></div>--}}
                                {{--                <div class="col-6 text-center mx-auto">--}}
                                {{--                    <p> Ba Vì , Ngày .... Tháng .... Năm ....</p>--}}
                                {{--                    <p style="font-size: 19px ; margin-bottom: 30px">--}}
                                {{--                        <b>Ba Vì Homesaty</b>--}}
                                {{--                    </p>--}}
                                {{--                    </p>--}}
                                {{--                </div>--}}
                                {{--            </div>--}}
                                {{--        </div>--}}
                                {{--    </div>--}}



                                {{--    </body>--}}


                                <body>
                                    <style>
                                    .customer {
                                            padding: 3rem;
                                        }
                                        p.title-show {
                                            font-weight: 700;
                                            font-size: 25px;
                                            color: brown;
                                        }
                                        button.btn-primary {
                                            padding: 5px 24px 5px 24px;
                                            border-radius: 11px;
                                            border-color: beige;
                                        }
                                        form {
                                            margin-bottom: 1rem;
                                        }
                                        .cmt-date {
                                            display: flex;
                                            padding-left: 3rem;
                                            margin-bottom: 1rem;
                                            justify-content: space-around;
                                        }
                                        .cmt-date p {
                                            margin-right: 1rem;
                                        
                                        }
                                        .date-time{ 
                                        }
                                        .date-time {
                                            margin-left: -14rem;
                                        }
                                        .date-time h1 {
                                                font-size: 20px;
                                                color: chocolate;
                                            }
                                            a.btn-btn-delete {
                                        padding: 5px 20px 5px 20px;
                                        background: burlywood;
                                        border-radius: 1rem;
                                        color: white;
                                    }
                                    .admin-date h1 {
                                        font-size: 20px;
                                        color: chocolate;
                                        margin-bottom: 20px;
                                    }
                                    .admin-date {
                                display: flex;
                }
                                    </style>
                                <div class="container " style="background-color: cadetblue; border-radius: 12px;padding: 15px ;font-weight:700 ">
                                    <div class="col-md-12">

                                        <div class="row" style="background-color: #fff; padding: 15px">
                                            <div class="col-md-12 text-danger" style="font-size: 30px; color: #222; text-align: center">HOME STAY BA VÌ</div>
                                            <div class="col-md-12">
                                                -----------------------------------------------------
                                                <h3 class="text-danger" style="font-weight: 600">THÔNG TIN NGƯỜI NHẬN</h3>
                                                <p>Họ tên: <span style="color: #222">{{$show_booking->guest_name}}</span></p>
                                                <p>Điện thoại liên hệ: <span style="color: #222">{{$show_booking->phone}}</span></p>
                                                <p>Email: <span style="color: #222">{{$show_booking->guest_email}}</span></p>
                                                <p>Hình thức thanh toán: <span style="color: #222">Trả tiền mặt sau khi nhận phòng</span></p>
                                                -----------------------------------------------------
                                                <h4  class="text-danger" style="font-weight: 600">CHI TIẾT ĐƠN PHÒNG</h4>
                                                <p>Tên Phòng Đặt : {{$show_booking->room->name}} - {{number_format((float)$show_booking->room->price)}} VND x {{$days}}
                                                    = {{number_format((float)$show_booking->room->price * $days)}} VND . </p>
                                                <p>Số Người : {{$show_booking->amount_of_people}} người. </p>
                                                <p> Ngày Đến : {{ \Carbon\Carbon::parse($show_booking->check_in)->format('d/m/Y') }} -  Ngày đi : {{ \Carbon\Carbon::parse($show_booking->check_out)->format('d/m/Y') }}.</p>
                                                <p>Các Dịch Vụ Được dùng : </p>
                                                @foreach($show_booking->service as $service)
                                                    <p style="margin-left: 2rem">       {{$service->name}} - {{number_format((float)$service->price)}}
                                                        x {{$show_booking->amount_of_people}}
                                                        = {{number_format((float)$service->price * $show_booking->amount_of_people)}} VND .</p>
                                                @endforeach

                                                <p>Khuyến Mại Được Dùng :</p>
                                                @foreach($show_booking->discount as $discount)
                                                    <p style="margin-left: 2rem">     {{$discount->full_name}} - {{number_format((float)$discount->discount_rate)}} VND
                                                        .</p>
                                                @endforeach

                                                <p> Thành Tiền
                                                    : {{number_format((float)(($show_booking->room->price * $days) + ($service_price*$show_booking->amount_of_people))  - $discount_rate )}}
                                                    VND. </p>

                                                <br>
                                                -----------------------------------------------------
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($show_booking->status == 3)
                                <div class="customer">
                                    <p class="title-show">Đánh giá Của Khách Hàng</p>
                                    <form action="{{ route('evaluate') }}" >
                                        <input type="hidden" name="booking_id" value="{{$show_booking->id}}">
                                    <textarea class="mt-3" id="my-editor" name="content" value="{!! old('introduce_of_room') !!}" class="form-control">{!! old('introduce_of_room') !!}</textarea>
                                    <button class="btn-primary" type="submit">Đánh giá</button>
                                    </form>
                                
                                </div>
                                @if($show_booking->evaluate != null)
                                @foreach($show_booking->evaluate as $evaluate)
                                <div class="cmt-date">
                                <div class="date-time">
                                <h1> Đánh giá của khách hàng : </h1> 
                                <p>  {!! $evaluate->content !!}</p>
                                </div>  
                                <div class="admin-date">
                                    <div class="view-date">
                                    <h1>Ngày đánh giá</h1>
                                    <p>{{$evaluate->created_at}}</p>
                                    </div>               
                                    <div class="delete-room">
                                @can('View_Admin')
                                <a class="btn-btn-delete" href="{{route('evaluate.delete',['id'=> $evaluate->id])}}">Xóa</a>
                                @endcan
                                </div>
                                </div>   
                                </div>
                            
                                @endforeach
                                @endif
                                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                                <script>
                                    var options = {
                                        height: '300px',
                                        width:"800px",
                                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                                    };
                                    CKEDITOR.replace('my-editor', options);
                                </script>
                                @endif
                                </body>

                            @endsection
