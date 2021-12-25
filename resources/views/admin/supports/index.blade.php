<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMESTAY</title>
</head>
<style>
    table.dataTable tbody tr { background-color: beige !important; }
    div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px){ .col-md-10{ max-width: 100% !important; } .col-md-2 { max-width: 10% !important; } }
</style>

<body>
    @extends('admin/layout_master/layout_master')
    @section('contents')
    <!-- PAGE HEADER -->
    <div class="page-header mt-5-7">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">{{ __('Danh sách hỗ trợ') }}</h4>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách hỗ trợ') }}</a></li>
            </ol>
        </div>
    </div>
    <!-- END PAGE HEADER -->
    <!-- <div class="container">
        <form action="{{ route('admin.categories.index') }}" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div> -->
    <table id="myTable" class='table' width='100%'>
        <thead>
            <tr>
                <th width="3%">STT</th>
                <th width="7%">Người gửi</th>
                <th width="7%">Ngày gửi</th>
                <th width="10%">Tiêu đề</th>
                <th width="10%">Nội dung</th>
                <th width="10%">Trạng thái</th>
                <th width="10%">Ngày cập nhật lần cuối</th>
                <th width="10%">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $item)
            <tr>
                <td> {{ $key +1 }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td>{{ $item->status == 0 ? "Chưa phản hồi" : "Đã phản hồi" }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.supports.edit', [ 'id' => $item->id ])}}">Sửa</a>
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
                                    <form action="{{ route('user.support.delete', [ 'id' => $item->id ])}}" method="POST">
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
        <p class="btn btn-danger">Tổng: {{ $tong }}</p>
    </table> <!-- END SET DATATABLE -->
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