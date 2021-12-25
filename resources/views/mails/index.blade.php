<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container" style="background-color: cadetblue; border-radius: 12px;padding: 15px">
            <div class="col-md-12">
                <p style="text-align: center; color: #fff">Đây là email tự động, quý khách vui lòng không phản hồi luồng
                    emai này !</p>
                <div class="row" style="background-color: #fff; padding: 15px">
                    <div class="col-md-12" style="font-size: 30px; color: #222; text-align: center">HOMESTAYBAVI</div>
                    <div class="col-md-12">
                        <p style="font-weight: bold;">Xin chào {{ $data['name'] }} !</p>
                        @if (isset($data['title']))
                        <p>{{ $data['title'] }}</p>
                       
                        @endif
                        <p>Cảm ơn bạn đã đặt phòng ở HOMESTAYBAVI !</p>
                        <h4>THÔNG TIN ĐƠN PHÒNG</h4>
                        <p>Dịch vụ: <span style="color: #222">ĐẶT PHÒNG TRỰC TUYẾN</span></p>
                        -----------------------------------------------------
                        <h4>THÔNG TIN NGƯỜI NHẬN</h4>
                        <p>Họ tên: <span style="color: #222">{{ $data['name'] }}</span></p>
                        <p>Điện thoại liên hệ: <span style="color: #222">{{ $data['phone'] }}</span></p>
                        <p>Email: <span style="color: #222">{{ $data['email'] }}</span></p>
                        <p>Hình thức thanh toán: <span style="color: #222">Trả tiền mặt sau khi nhận phòng</span></p>
                        <i>Nếu thông tin cá nhân không chính xác quý khách vui lòng liên hệ 0983335201 để được hỗ trợ
                            !</i><br>
                        -----------------------------------------------------
                        <h4>CHI TIẾT ĐƠN PHÒNG</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name" style="width: 150px">Tên phòng</th>
                                    <th class="product-price">Giá phòng</th>
                                    <th class="product-price">Dịch vụ</th>
                                    <th class="product-price">Khuyến mại</th>
                                    <th class="product-price">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="product-name" style="width: 150px; padding-left: 15px;">
                                        {{ $data['name_room'] }}
                                    </td>
                                    <td class="product-price" style="padding-left: 3px;">
                                        {{ number_format($data['price_room']) }} VNĐ
                                    </td>
                                    <td class="product-price" style="padding-left: 3px;">
                                        {{ number_format($data['service_id']) }}VNĐ
                                    </td>
                                    <td class="product-price" style="padding-left: 3px;">@if (!empty($data['discount_id']))
                                        {{ $data['discount_id'] }}VNĐ
                                        @else
                                        0
                                        @endif
                                    </td>
                                    <td class="product-subtotal" style="padding-left: 3px;">
                                        {{ number_format($data['total']) }} VNĐ</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <br>
                        -----------------------------------------------------
                        <br>
                        <i>Mọi thắc mắc về đơn hàng quý khách vui lòng liên hệ đến 0983335201 ! Một lần nữa cảm ơn quý khách
                            đã tin tưởng HOMESTAYBAVI !</i>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</body>

</html>