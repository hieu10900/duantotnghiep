<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	@extends('admin/layout_master/layout_master')
	@section('contents')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">Yêu cầu hỗ trợ</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>Tài khoản</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> Yêu cầu hỗ trợ mới</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
	<!-- SUPPORT REQUEST -->
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">Yêu cầu hỗ trợ mới</h3>
				</div>
				<div class="card-body pt-5">									
					<form id="" action="{{ route('user.support.store') }}" method="post" enctype="multipart/form-data">
						@csrf
                        <div class="row mt-2">							
							<div class="col-lg-12 col-md-12 col-sm-12">							
								<div class="input-box">								
									<h6>Họ tên <span class="text-muted"></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="subject" name="name" required>
									</div> 
									@error('subject')
										<p class="text-danger">{{ $errors->first('subject') }}</p>
									@enderror	
								</div> 						
							</div>
						</div>

                        <div class="row mt-2">							
							<div class="col-lg-12 col-md-12 col-sm-12">							
								<div class="input-box">								
									<h6>Email <span class="text-muted"></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="subject" name="email" required>
									</div> 
									@error('subject')
										<p class="text-danger">{{ $errors->first('subject') }}</p>
									@enderror	
								</div> 						
							</div>
						</div>

						<div class="row mt-2">							
							<div class="col-lg-12 col-md-12 col-sm-12">							
								<div class="input-box">								
									<h6>Tiêu đề <span class="text-muted"></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="subject" name="subject" required>
									</div> 
									@error('subject')
										<p class="text-danger">{{ $errors->first('subject') }}</p>
									@enderror	
								</div> 						
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6>Nội dung<span class="text-muted"></span></h6>							
									<textarea class="form-control" name="message" rows="10"></textarea>
									@error('message')
										<p class="text-danger">{{ $errors->first('message') }}</p>
									@enderror	
								</div>											
							</div>
						</div>

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('user.support.index') }}" class="btn btn-cancel mr-2">Quay lại</a>
							<button type="submit" class="btn btn-primary">Gửi</button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
	<!-- END SUPPORT REQUEST -->
	@endsection
</body>

</html>