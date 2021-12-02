@extends('admin/layout_master/layout_master')
@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Cập nhật các loại phòng') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Cập nhật các loại phòng') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<form action="{{ route('admin.categories.update', ['id' => $data->id]) }}" method="POST">
    @csrf
    <div class="mt-3" style="color: 000000;">
        <label for="">Tên danh mục</label>
        <input class="form-control" type="text" name="name" value="{{ $data->name }}">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-3">
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
        <label for="">Introduce</label>
        <input class="form-control" type="text" name="introduce" value="{{ $data->introduce }}">
        @error('introduce')
        <span class="text-danger">{{ $message }}</span>
        @enderror
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