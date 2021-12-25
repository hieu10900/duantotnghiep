<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px) { .col-md-10{ max-width: 100% !important; } }
</style>
<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
     <!-- PAGE HEADER -->
	<div class="page-header mt-5-7 mb-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Danh sách các phòng') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách các phòng') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
    <!-- <div class="">
        <form action="{{ route('admin.rooms.index') }}" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div> -->
    <table class="table table-bordered table-hover mt-4 rounded" id="myTable">
    <thead style="background-color: #7a5e49; max-width:100%;" class="table-dark" style="margin-top: 30px;">
            <tr>
                <td style="width: 10px;">Stt</td>
                <td style="width: 100px;">Tên phòng</td>
                <td style="width: 70px;">Tiêu đề</td>
                <td style="width: 100px;">Ảnh phòng</td>
                <td style="width: 70px;">Giá phòng</td>
                <td style="width: 70px;">Giới thiệu</td>
                <td style="width: 10px;">Trạng thái</td>
                <td style="width: 70px;">Loại hàng</td>
                <td style="width: 120px;">
                    <a href="{{ route('admin.rooms.create') }}" class="card-title">
                        <h5>Thêm mới</h5>
                    </a>
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->introduce }}</td>
                <td><img src="{{ config('app.base_url') . $item->feature_image_path	 }}" alt="" width="100px" height="100px"></td>
                <td>{{ $item->price }}</td>
                <td>{!! $item->introduce_of_room !!}</td>
                <td>{{ $item->status == 0 ? "Chưa đặt" : "Đã đặt" }}</td>
                <td>{{ $item->name_type ?? " Phòng Đã Xóa" }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.rooms.edit', [ 'id' => $item->id ])}}">Sửa</a>
                    <button class="btn btn-danger" role="button" data-toggle="modal" data-target="#confirm_delete_{{ $item->id }}">Xóa</button>
                    <div class="modal fade" id="confirm_delete_{{ $item->id }}" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Xóa bản ghi này?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
                                    <form action="{{ route('admin.rooms.delete', [ 'id' => $item->id ])}}" method="POST">
                                        @csrf
                                        <button tybe="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}

    @endsection
@push('js')
<script>

$(document).ready(function() {
    $('#myTable').DataTable( {
        responsive: true,

    });
})
</script>
@endpush
</body>

</html>
