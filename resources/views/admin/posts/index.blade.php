@extends('admin/layout_master/layout_master')
@section('header')

@section('contents')
    <h1 class="font-weight-bold text-center" style="font-family: 'Times New Roman', Times, serif;">Danh Mục Bài Viết</h1>
    <button style="float: right;margin-bottom: 2rem" class="btn btn-success" id="post-create" role="button"
            data-toggle="modal" data-target="#postCreat">Tao Moi</button>
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
                    <td>
                        <button class="post-modal-edit btn btn-primary" role="button" data-id="{{ $posts->id }}"
                            data-toggle="modal" data-target="#postEdit">Sửa</button>
                        <div>
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
