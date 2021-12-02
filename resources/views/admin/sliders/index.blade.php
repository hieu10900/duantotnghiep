<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
    <!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Danh sách các Slider') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách các Slider') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
    <!-- <div class="container">
        <form action="{{ route('admin.sliders.index') }}" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div> -->
    <table class="table table-bordered table-hover mt-4 rounded" id="myTable" >
        <thead style="background-color: #383f45; max-width:100%;" class="table-dark" style="margin-top: 30px;">
            <tr>
                <td style="width: 10px;">Stt</td>
                <td style="text-align: center;">Ảnh slider</td>
                <td>Thông điệp</td>
                <td>Ngày thêm</td>
                <td style="text-align: center;"><a href="{{ route('admin.sliders.create') }}">
                        Thêm mới</a></td>
            </tr>
        </thead>
        <tbody>
            <?php $dem =2 ?>
            @foreach ($data as $key => $item)
            <tr>
                <td style="text-align: center;">{{ $key + 1 }}</td>
                <td style="text-align: center;"><img src="{{ $item->image }}" alt="" width="100px" height="100px"></td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->created_at }}</td>
                <td style="text-align: center;">
                    <a class="btn btn-primary" href="{{ route('admin.sliders.edit', [ 'id' => $item->id ])}}">Sửa</a>
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
                                    <form action="{{ route('admin.sliders.delete', [ 'id' => $item->id ])}}" method="POST">
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
    $('#myTable').DataTable();
})
</script>
@endpush
</body>

</html>