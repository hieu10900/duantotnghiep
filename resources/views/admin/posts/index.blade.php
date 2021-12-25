<style>
    td.modal-post {
    display: flex;
    justify-content: space-evenly; 
}
table.dataTable tbody tr { background-color: beige !important; }
div#myTable_wrapper {
    white-space: nowrap;
    overflow-x: scroll;
}
@media screen and (max-width:1024px) {
   .col-md-2 {
    max-width: 10% !important;
}
}
@media screen and (max-width:769px) {
    .col-md-10{
        max-width: 100% !important;
    }   
    .col-md-2 {
    max-width: 10% !important;
}
}
</style>

@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Danh sách các bài viết') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Website') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Danh sách các bài viết') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Sách Bài Viết</h1>
    <button style="float: right;margin-bottom: 2rem" class="btn btn-success" id="post-create" role="button"
            data-toggle="modal" data-target="#postCreat">Thêm mới</button>
    <table class="table " id="myTable">
        <thead>
            <tr class="text-center">
                <th scope="col">Số Thứ Tự</th>
                <th scope="col">Tiêu Đề</th>
                <th scope="col">Ảnh Bìa</th>
                <th scope="col">Người Viết Bài</th>
                <th scope="col">Hành Động</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($posts as $posts)
                <tr>
                    <th scope="row"> {{ $loop->index+1 }} </th>
                    <td>{{ $posts->title }}</td>
                    <td>
                        <image src="/image/product/{{ $posts->image }}" with="800px" height="100px" width="100px">
                    </td>
                    <td>{{ $posts->author->full_name }}</td>
                    <td class="modal-post">
                        <button class="post-modal-edit btn btn-primary" role="button" data-id="{{ $posts->id }}"
                            data-toggle="modal" data-target="#postEdit">Sửa</button>
                        <div class="delete-btn">
                            <button class="post_delete button btn btn-danger"
                                data-id="{{ $posts->id }}">Xóa</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="test-modal modal fade" name="postCreat" id="postCreat" role="dialog">

        <div class="modal-dialog modal-xl" role="document">
            @include('admin.posts.postForm')
        </div>
    </div>
    {{-- creatr --}}
    <div class="test-modal modal fade" name="postEdit" id="postEdit" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            @include('admin.posts.postForm')
        </div>
    </div>
    {{--  --}}

@endsection
@push('js')
    @include('admin.posts.postJs')
@endpush
