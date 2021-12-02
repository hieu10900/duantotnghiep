@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Phiếu Đặt Phòng</h1>
    <a style="float: right;margin-bottom: 2rem" href="{{route('admin.booking.create')}}" class="btn btn-success">Tao Moi</a>
    <table class="table " id="myTable">
        <thead>
        <tr class="text-center">
            <th scope="col">Số Thứ Tự</th>
            <th scope="col">Tên Người Đặt</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Tên Phòng Đã Đặt</th>
            <th scope="col">Ngày Đến </th>
            <th scope="col">Ngày ĐI</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Trạng Thái</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($booking_data as $booking)
            <tr>
                <th scope="row"> {{ $loop->index+1 }} </th>
                <td><a href="{{route('admin.booking.show',['id'=> $booking->id])}}"> {{ $booking->guest_name}}</a></td>
                <td>{{ $booking->phone}}</td>
                <td>{{$booking->room_id}}</td>
                <td>{{ \Carbon\Carbon::parse($booking->check_in)->format('d/m/Y') }}</td>
                <td>{{\Carbon\Carbon::parse($booking->check_out)->format('d/m/Y') }}</td>
                <td>@if($booking->status == 0)Chưa Cọc @elseif($booking->status ==1 ) Đã Cọc @else Đã hoàn Thành @endif</td>
                <td>
{{--                    <button class="post-modal-edit btn btn-primary" role="button"--}}
{{--                            data-toggle="modal" >Sửa--}}
{{--                    </button>--}}
                    <a href="{{route('admin.booking.edit',['id'=> $booking->id])}}" class="btn btn-primary">Sửa</a>
                    <div>
                        <button class="booking_delete button btn btn-danger"
                                data-id="{{ $booking->id }}">Xóa
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
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
                                alert(data.message);
                                window.location.reload();
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
