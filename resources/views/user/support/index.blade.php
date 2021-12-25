<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOMESTAY</title>
</head>
<style>
	div#myTable_wrapper { white-space: nowrap; overflow-x: scroll; } @media screen and (max-width:769px){ .col-md-10{ max-width: 100% !important; } .col-md-2 { max-width: 10% !important; } }
</style>
<body>
	@extends('admin/layout_master/layout_master')
	@section('contents')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Yêu cầu hỗ trợ') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Tài khoản') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Yêu cầu hỗ trợ') }}</a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="{{ route('user.support.create') }}" class="btn btn-primary mt-1">Yêu cầu hỗ trợ mới</a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
	<!-- SUPPORT REQUEST DATA TABLE -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">Danh sách yêu cầu hỗ trợ của tôi</h3>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<!-- SET DATATABLE -->
						<table id="myTable" class='table' width='100%'>
							<thead>
								<tr>
									<th width="10%">Ngày gửi</th>
									<th width="10%">Tiêu đề</th>
									<th width="15%">Nội dung</th>
									<th width="10%">Trạng thái</th>
									<th width="10%">Ngày cập nhật lần cuối</th>
									<th width="5%">Quản lý</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($supports as $item)
								<tr>
									<td>{{ $item->created_at }}</td>
									<td>{{ $item->subject }}</td>
									<td>{{ $item->message }}</td>
									<td>{{ $item->status == 0 ? "Chưa phản hồi" : "Đã phản hồi"  }}</td>
									<td>{{ $item->updated_at }}</td>
									<td>
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
						</table> <!-- END SET DATATABLE -->

					</div> <!-- END BOX CONTENT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END SUPPORT REQUEST DATA TABLE -->

	<!-- MODAL -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><i class="mdi mdi-alert-circle-outline color-red"></i> Confirm Deletion</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="deleteModalBody">
					<div>
						<!-- DELETE CONFIRMATION -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
	@endsection
</body>

</html>