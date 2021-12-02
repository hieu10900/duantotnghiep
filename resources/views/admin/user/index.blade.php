@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Tài Khoản</h1>

    <table class="table " id="myTable">
        <thead>
        <tr class="text-center">
            <th scope="col">Số Thứ Tự</th>
            <th scope="col">Họ và Tên</th>
            <th scope="col">Ảnh </th>
            <th scope="col">Email</th>
            <th scope="col">Địa Chỉ</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Hành Động</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($User as $User)
            <tr>
                <th scope="row"> {{ $loop->index+1 }} </th>
                <td> {{ $User->full_name}}</td>
                <td><img src="{{ asset('image/user/'.$User->avatar) }}" height="200px" width="200px"></td>
                <td>{{$User->email}}</td>
                <td>{{$User->address}} </td>
                <td>@if($User->gender == 0)Nam @else Nữ @endif </td>
                <td><a href="{{route('admin.user.edit',['id'=> $User->id])}}" class="btn btn-primary">Sửa</a><div>
                        <button class="discount_delete button btn btn-danger"
                                data-id="{{ $User->id }}">Xóa
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
                        url: "{{ route('admin.user.delete') }}",
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
