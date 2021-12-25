<style>
    .dropdown-menu.show {
    left: -50px !important;
}
div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px){ .col-md-10{ max-width: 100% !important; } .col-md-2 { max-width: 10% !important; } }
</style>

@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Phiếu Đặt
        Phòng</h1>
    <a style="float: right;margin-bottom: 2rem" href="{{route('admin.booking.create')}}" class="btn btn-success">Tạo
        mới</a>

        <table class="table " id="myTable">
            <thead>
            <tr class="text-center ">
                <th scope="col">Số Thứ Tự</th>
                <th scope="col">Tên Người Đặt</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Tên Phòng Đã Đặt</th>
                <th scope="col">Ngày Đến</th>
                <th scope="col">Ngày ĐI</th>
                {{--            <th scope="col">Trạng Thái</th>--}}
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($booking_data as $booking)
                <tr>
                    <th scope="row"> {{ $loop->index+1 }} </th>
                    <td><a href="{{route('admin.booking.show',['id'=> $booking->id])}}"> {{ $booking->guest_name}}</a>
                    </td>
                    <td>{{ $booking->phone}}</td>
                    <td>{{$booking->room->name ?? "Phòng Đã Xóa"}}</td>
                    <td>{{ \Carbon\Carbon::parse($booking->check_in)->format('d/m/Y') }}</td>
                    <td>{{\Carbon\Carbon::parse($booking->check_out)->format('d/m/Y') }}</td>
                    <td>
                        <div class="dropdown ">
                            <a href="#" class="btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill"
                               data-toggle="dropdown">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu ">
                                @if($booking->status == 0)
                                    <a class="dropdown-item" href="{{route("admin.booking.approve",['id'=> $booking->id])}}">
                                        <i class="fas fa-check-circle"></i> Duyệt đơn
                                    </a>
                                @endif
                                <a class="dropdown-item" href="{{route('admin.booking.edit',['id'=> $booking->id])}}">
                                    <i class="fas fa-edit"></i> Chỉnh Sửa
                                </a>
                                @if($booking->status =="1" or $booking->status == "0"or $booking->status == "2")
                                    <a class="dropdown-item" href="{{route("admin.booking.cancel",['id'=> $booking->id])}}">
                                        <i class="fas fa-times-circle"></i> Hủy đơn
                                    </a>
                                @endif
                                    <a class="booking_delete dropdown-item" href="" data-id="{{ $booking->id }}">
                                        <i class="fas fa-trash"></i> Xóa
                                    </a>

                            </div>
                        </div>
                        {{--                    <a href="{{route('admin.booking.edit',['id'=> $booking->id])}}" class="btn btn-primary">Sửa</a>--}}
                        {{--                    <div>--}}
                        {{--                        <button class="booking_delete button btn btn-danger"--}}
                        {{--                                data-id="{{ $booking->id }}">Xóa--}}
                        {{--                        </button>--}}
                        {{--                    </div>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable( {
                responsive: true,
            });

        })
        //  delete
        $(".booking_delete").on('click', function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Bạn có chắc muốn xóa :",
                buttons: [true, "Có"],
            }).then((willDelete) => {
                if (willDelete) {

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        url: "{{ route('admin.booking.delete') }}",
                        data: {
                            id: id
                        },
                        success: function (data) {
                            if (data.status == 100) {
                                swal({
                                    title: "Đã Xóa Thanh Công!",
                                    icon: "success",
                                    button: "Quay Lại!",
                                }).then((value) => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                } else {
                }
            });
            ;
        });
    </script>
@endpush
