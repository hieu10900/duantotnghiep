@extends('admin/layout_master/layout_master')
@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">{{ __('Cập nhật hỗ trợ khách hàng') }}</h4>
        <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Cập nhật hỗ trợ khách hàng') }}</a></li>
        </ol>
    </div>
</div>
<!-- END PAGE HEADER -->
<form action="{{ route('admin.supports.update', ['id' => $data->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Trạng thái</label>
        <select class="form-control" name="status">
            <option value="0">Chưa nhận</option>
            <option value="1">Đã phản hồi</option>
        </select>
    </div>
    <button class="mt-3 btn btn-primary">Cập nhật</button>
</form>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection