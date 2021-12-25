<style>
    td.add-delete {
    display: flex;
    justify-content: space-around;
}
table.dataTable tbody tr { background-color: beige !important; }
div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } 
@media screen and (max-width:769px) 
{ .col-md-10{ max-width: 100% !important; } 
}
</style>

@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">{{ __('Danh sách các khuyến mại') }}</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách các khuyến mại') }}</a></li>
        </ol>
    </div>
</div>
<h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Mã Khuyến Mại</h1>
<a style="float: right;margin-bottom: 2rem" href="{{route('admin.discount.create')}}" class="btn btn-success">Tạo
    mới</a>
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
            <td class="add-delete">
                <a href="{{route('admin.discount.edit',['id'=> $discount->id])}}" class="btn btn-primary">Sửa</a>
                <div>
                    <button class="discount_delete button btn btn-danger" data-id="{{ $discount->id }}">Xóa</button>
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
        $('#myTable').DataTable({
            responsive: true,

        });
    })
    //  delete
    $(".discount_delete").on('click', function(event) {
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
                    success: function(data) {
                        if (data.status == 100) {
                            alert(data.message);
                            window.location.reload();
                        }
                    }
                });
            } else {}
        });;
    });
</script>
@endpush