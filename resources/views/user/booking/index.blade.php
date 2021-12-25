<style>
    table.dataTable tbody tr { background-color: beige !important; }
    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf;
    padding: 0px 15px 0px 15px;
    font-size: 1rem;
}
div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px){ .col-md-10{ max-width: 100% !important; } .col-md-2 { max-width: 10% !important; } }
</style>

@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <!-- PAGE HEADER -->
    <div class="page-header mt-5-7">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ __('Booking') }}</h4>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i
                            class="fa fa-magic mr-2 fs-12"></i>{{ __('Tài khoản') }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a
                        href="{{url('/' . $page='#')}}"> {{ __('Booking') }}</a></li>
            </ol>
        </div>
    </div>
    <!-- END PAGE HEADER -->
    <!-- USER PROFILE PAGE -->
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Phiếu Đặt
        Phòng</h1>
    <table class="table " id="myTable">
        <thead>
        <tr class="text-center">
            <th scope="col">Số Thứ Tự</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Tên Phòng Đã Đặt</th>
            <th scope="col">Ngày Đến</th>
            <th scope="col">Ngày ĐI</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Trạng Thái</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($booking_data as $booking)
            <tr>
                <th scope="row"> {{ $loop->index+1 }} </th>
                <td>{{ $booking->phone}}</td>
                <td>{{$booking->room->name}}</td>
                <td>{{ \Carbon\Carbon::parse($booking->check_in)->format('d/m/Y') }}</td>
                <td>{{\Carbon\Carbon::parse($booking->check_out)->format('d/m/Y') }}</td>
                <td>@if($booking->status == 0)Chưa duyệt @elseif($booking->status ==1 ) Đã duyệt - Chưa cọc
                    @elseif($booking->status ==2 ) Đã duyệt - Đã cọc
                    @elseif($booking->status ==3 ) Hoàn Thành
                    @elseif($booking->status ==4 ) Bị Hủy
                    @endif</td>
                <td>
                    <div>
                        <a href="{{route('show.user',['id'=> $booking->id])}}"
                           class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ $booking->status == 3 ? "Đánh giá" : "Chi Tiết" }}</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
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
