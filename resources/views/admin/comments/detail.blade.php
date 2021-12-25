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
            <h4 class="page-title mb-0">{{ __('Danh sách các bình luận') }}</h4>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách các bình luận') }}</a></li>
            </ol>
        </div>
    </div>
    <div class="container">
        <form action="" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <table class="table table-bordered table-hover mt-4 rounded">
    <thead style="background-color: #7a5e49; max-width:100%;" class="table-dark" style="margin-top: 30px;">
            <tr>
                <td>Id</td>
                <td>Ảnh sản phẩm</td>
                <td>Chi tiết bình luận</td>
                <td>Ngày bình luận</td>
                <td>Quản lý</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td><img src="{{ $item->feature_image_path }}" width="100px" height="100px" alt=""></td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.comments.show', [ 'id' => $item->room_id ])}}">Xem</a>
                    <button class="btn btn-danger" role="button" data-toggle="modal" data-target="#confirm_delete_{{ $item->id_cmt }}">Delete</button>
                    <div class="modal fade" id="confirm_delete_{{ $item->id_cmt }}" tabindex="-1" role="dialog">
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{ route('admin.comments.delete', [ 'id' => $item->id_cmt ])}}" method="POST">
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
</body>

</html>