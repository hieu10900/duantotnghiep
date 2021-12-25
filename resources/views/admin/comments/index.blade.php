    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Document</title>
    </head>
<style>
    .scroll{
        overflow-x: scroll;
        white-space: nowrap;
    }
    div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px){ .col-md-10{ max-width: 100% !important; } .col-md-2 { max-width: 10% !important; } }
</style>
    <body>
    <div class="container">  
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
        <div class="scroll">
          <table class="table table-bordered table-hover mt-4 rounded" id="myTable">
           <thead style="background-color: #7a5e49; max-width:100%;" class="table-dark" style="margin-top: 30px;">
                <tr style="text-align: center">
                    <td style="width: 10px;">Stt</td>
                    <td>Phòng</td>
                    <td>Tên phòng</td>
                    <td>Nội dung</td>
                    <td>Người bình luận</td>
                    <td>Mới nhất</td>
                    <td>Quản lý</td>
                </tr>
            </thead>
            <tbody style="text-align: center">
                @foreach ($data as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ $item->feature_image_path }}" width="100px" height="100px" alt=""></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->full_name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.comments.show', [ 'id' => $item->room_id ])}}">Chi tiết</a>
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
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('admin.comments.delete', [ 'id' => $item->id ])}}" method="POST">
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
        </div>
      
        {{$data->links()}}
        @endsection
        @push('js')
    </div>
    
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    responsive: true,

                });
            })
        </script>
        @endpush
    </body>

    </html>