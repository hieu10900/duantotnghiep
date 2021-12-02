@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Phiếu Đặt Phòng</h1>
    <a style="float: right;margin-bottom: 2rem" href="{{route('admin.service.create')}}" class="btn btn-success">Tao Moi</a>
    <table class="table " id="myTable">
        <thead>
        <tr class="text-center">
            <th scope="col">Số Thứ Tự</th>
            <th scope="col">Tên Dịch Vụ</th>
            <th scope="col">Giá Tiền</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Trạng Thái</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($service as $service)
            <tr>
                <th scope="row"> {{ $loop->index+1 }} </th>
                <td>{{ $service->name}}</td>
                <td>{{ $service->price}}</td>
                <td>{{$service->quantity}}</td>
                <td><a href="{{route('admin.service.edit',['id'=> $service->id])}}" class="btn btn-primary">Sửa</a><div>
                        <button class="service_delete button btn btn-danger"
                                data-id="{{ $service->id }}">Xóa
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
        $(".service_delete").on('click', function (event) {
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
                        url: "{{ route('admin.service.delete') }}",
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
