{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<script>
    $(document).ready(function(){
        $('.mutiselect').multiselect({
            nonSelectedText: 'Chọn dịch vụ ... ',
            enableHTML: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth:'250px',
        });
        $(".datepicker").datepicker({
                            dateFormat: 'dd-mm-yy  ',
                            minDate: 1,
                            changeMonth: true, //Tùy chọn này cho phép người dùng chọn tháng
                            changeYear: true //Tùy chọn này cho phép người dùng lựa chọn từ phạm vi năm
                        });
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#bookings").on('click', function(event) {
        event.preventDefault();
        console.log(123);
        var data_booking = {
            user_id: $('#user_id').val(),
            room_id: $('#post_id').val(),
            email: $('#exampleInputEmail1').val(),
            name: $('#exampleName').val(),
            phone: $('#examplePhone').val(),
            check_in: $('#checkIn').val(),
            check_out: $('#checkOut').val(),
            discount: $('#exampleDiscount').val(),
            services: $('#services').val(),
            amount_of_people:$('#amount_of_people').val(),

        };
        console.log(data_booking);
        $.ajax({
            type: "post",
            url: "{{route('bookingOfUsser')}}",
            data: data_booking,
            success: function(data) {
                if (data.status == 200) {
                    $('.text-danger').text("");
                    swal({
                        title: "Xác Nhận Đặt Phòng  ",
                        text: data.message,
                        icon: "info",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: "post",
                                    url: "{{route('booking')}}",
                                    data: data_booking,
                                    success: function(data) {
                                        swal("Bạn đã đặt phòng thành công.")
                                            .then((value) => {
                                               window.location.reload();
                                            });
                                    }
                                });
                            } else {

                            }
                        });
                }else if(data.status == 100){
                    swal("Định dạng ngày tháng sai", "Ngày đến phải lơn hơn ngày hiện tại , ngày đi phải lớn hơn ngày đến.");
                }else if(data.status == 300){
                    swal("Mã giảm giá sai hoặc hết hạn .", "Quý khách vui lòng nhập lại");
                }

            },
            error: function(data) {
                var errors = data.responseJSON;
                if ($.isEmptyObject(errors) == false) {
                    $('.text-danger').text("");
                    $.each(errors.errors, function(key, value) {
                        var ErrorID = "#" +key + 'Error';
                        $(ErrorID).text(value);
                        console.log(ErrorID);
                    })
                }

            },

        });
    });
</script>
