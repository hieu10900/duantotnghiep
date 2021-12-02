@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Phiếu Đặt Phòng</h1>

    <table class="table " id="myTable">
        <thead>
        <tr class="text-center">
            <th scope="col">Số Thứ Tự</th>
            <th scope="col">Tên Mã Khuyến Mại</th>
            <th scope="col">Mã Code Khuyến Mại</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Số Tiền Được Giảm</th>
            <th scope="col">Trạng Thái</th>
            <th scope="col">Hành Động</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($discount as $discount)
            <tr>
                <th scope="row"> {{ $loop->index+1 }} </th>
                <td>{{ $discount->full_name}}</td>
                <td>{{ $discount->code}}</td>
                <td>{{$discount->quantity}}</td>
                <td>{{$discount-> discount_rate}} VND</td>
                <td>@if($discount->status == 0)Còn Hạn @else Hết Hạn @endif </td>
                <td><a href="{{route('admin.discount.edit',['id'=> $discount->id])}}" class="btn btn-primary">Sửa</a><div>
                        <button class="discount_delete button btn btn-danger"
                                data-id="{{ $discount->id }}">Xóa
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
        $(".discount_delete").on('click', function (event) {
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
                        url: "{{ route('admin.discount.delete') }}",
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
