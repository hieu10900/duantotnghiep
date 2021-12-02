@extends('admin/layout_master/layout_master')
@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Thêm mới các phòng') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Thêm mới các phòng') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Tên phòng</label>
        <input type="text" name="name" value="{{ old('name') }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh phòng</label>
        <input type="file" name="feature_image_path" value="{{ old('feature_image_path') }}" id="" placeholder="" aria-describedby="helpId">
        
    </div>
    <div class="form-group">
        <label for="">Ảnh chi tiết</label>
        <input type="file" multiple name="image[]" value="{{ old('image[]') }}" id="" placeholder="" aria-describedby="helpId">
        
    </div>
    <div class="form-group">
        <label for="">Giá phòng</label>
        <input type="number" name="price" value="{{ old('price') }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Tiêu đề</label>
        <input type="text" name="introduce" id="" value="{{ old('introduce') }}"  class="form-control" placeholder="" aria-describedby="helpId">
        @error('introduce')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giới thiệu</label>
        <textarea class="mt-3" id="my-editor" name="introduce_of_room" value="{{ old('introduce_of_room') }}" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
        @error('introduce_of_room')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Loại phòng</label>
        <select class="form-control" name="room_type">
            <option value="0">Select room_type
            </option>
            @foreach ($data as $item)
            <option value="{{ $item->id}}">{{ $item->name}}</option>
            @endforeach
        </select>
        @error('room_type')
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
    <button class="mt-3 btn btn-primary">Thêm mới</button>
</form>
@endsection
@section('js')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endsection