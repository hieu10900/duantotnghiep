@extends('admin/layout_master/layout_master')
@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Cập nhật các phòng') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Cập nhật các phòng') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<form action="{{ route('admin.rooms.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Tên phòng</label>
        <input type="text" name="name" value="{{ $data->name }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">ẢNh phòng</label>
        <input type="file" name="feature_image_path" value="{{ $data->feature_image_path }}" id="" placeholder="" aria-describedby="helpId"><br>
        <img src="{{ config('app.base_url') . $data->feature_image_path }}" value="{{ $data->feature_image_path }}" width="100px" height="100px" alt="">
    </div>
    <div class="form-group">
        <label for="">Ảnh chi tiết</label>
        <input type="file" multiple name="image[]" id="" value="{{ $data->image }}" placeholder="" aria-describedby="helpId"><br>
        @foreach ($imageRooms as $image)
        <img src="{{ config('app.base_url') . $image->image }}" value="{{ $image->image }}" width="100px" height="100px" alt="">
        @endforeach
    </div>
    <div class="form-group">
        <label for="">Giá phòng</label>
        <input type="text" name="price" value="{{ $data->price }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Tiêu đề</label>
        <input type="text" name="introduce" value="{{ $data->introduce }}" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="">Giới thiệu</label>
        <textarea class="mt-3" id="my-editor" name="introduce_of_room" class="form-control">{{ $data->introduce_of_room }}</textarea>

    </div>
    <div class="form-group">
        <label for="">Loại phòng</label>
        <select class="form-control" name="room_type">
            @foreach ($room_types as $item)
            <option value="{{ $item->id}}">{{ $item->name}}</option>
            @endforeach
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