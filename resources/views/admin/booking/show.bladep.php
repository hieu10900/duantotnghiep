@extends('admin/layout_master/layout_master')
@section('contents')
    <body class="A4">
    <div class="mx-auto contentpaneopen sheet padding-10mm">
        <div style="padding-left: 50px" class="mx-auto mt-2">
            <div>

            </div>
            <b>75A Hiep Binh street, Hiep Binh Phuoc ward, Thu Duc district, HCMC.</b><br>
            <b>Tel: 028 71 003000</b>
        </div>
        <div class="customer_info" style="padding-top:3rem;float: left;width: 100%">
            <p style="font-size: 28px;text-transform: uppercase;text-align:center"><b class="title">Phiếu Thanh Toán</b>
            </p>

            <div style="width: 83%" class="mx-auto mt-5">
                <p>Kính gửi: <b>{{$show_booking->guest_name}}</b>
                </p>

                <p>Trước tiên, Homestay AN VUi chân thành cám ơn Quý khách Hàng đã sử dụng dịch vụ của chúng tôi, tin
                    chọn AN VUI trong chuyến
                    ghé thăm BA VÌ. </p>
                <p> Homesaty AN VUI xin gửi Quý khách thông tin các dịch vụ như sau:
                </p>
                <div style="margin-left: 30px">
                    <p>- Phòng Quý Khách Đã Đặt : <b>{{$show_booking->room->name}} .</b>
                    <p>- Giá Phòng : <b>{{$show_booking->room->price}} VND</b>.
                    <p>- Các Dịch Vụ Đã sử Dụng:</p>
                    <div style="margin-left: 30px">
                        @foreach($show_booking->service as $service)
                            <p> -<b> {{$service->name}}  : {{$service->price}} VND </b>. </p>
                        @endforeach
                    </div>
                    @if($show_booking->discount != null)
                        <p>Mã Khuyến Mại Được Sử Dụng :
                        @foreach($show_booking->discount as $discount)
                           <b> {{$discount->full_name}} : {{$discount->discount_rate}} VND</b>.
                        @endforeach
                        </p>
                    @endif
                    <p>Tổng Tiền         : <b>{{$service_price + $show_booking->room->price }} VND</b>.  </p>
                    <p>Số tiền được giảm : <b>{{$discount_rate}}</b> VND.  </p>
                    <p>Phải trả          : <b>{{$service_price + $show_booking->room->price - $discount_rate}} VND </b>.  </p>
                </div>
                <p>Ngoài ra, khi Anh/ Chị giới thiệu khách Hàng khác đến Homestay, anh/chị sẽ nhận được
                    các phần quà đặc biệt của Homesaty.</p>
                <p>Homestay AN VUI kính chúc anh/chị luôn tràn ngập niềm vui và thật nhiều sức khỏe!</p>
            </div>
            <div class="row pt-3">
                <div class="col-6"></div>
                <div class="col-6 text-center mx-auto">
                    <p> Ba Vì , Ngày .... Tháng .... Năm ....</p>
                    <p style="font-size: 19px ; margin-bottom: 30px">
                        <b>An Vui Homesaty</b>
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>



    </body>




@endsection
