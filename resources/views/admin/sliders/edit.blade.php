@extends('admin/layout_master/layout_master')
@section('contents')
 <!-- PAGE HEADER -->
 <div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Cập nhật các Slider') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="#"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('Cập nhật các Slider') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<form action="{{ route('admin.sliders.update', ['id' => $data->id]) }}" method="POST">
    @csrf
    <div class="mt-3">
    <label for="">Ảnh slider</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="image" value="{{ $data->image }}">
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div> <br>
    <div class="mt-3" style="color: 000000;">
        <label for="">Thông điệp</label>
        <input class="form-control" type="text" name="content" value="{{ $data->content }}">
        @error('content')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        <select class="form-control" name="status">
            <option value="0">hidden</option>
            <option value="1">show</option>
        </select>
    </div>
    
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('my-editor', options);
    </script>
    <button class="mt-3 btn btn-primary">Cập nhật</button>
</form>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection