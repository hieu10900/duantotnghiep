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
			<h4 class="page-title mb-0">{{ __('Tất cả loại phòng') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fa fa-magic mr-2 fs-12"></i>{{ __('Tài khoản') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('/' . $page='#')}}"> {{ __('Tất cả loại phòng') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
    <div class="container">
        <form action="" method="GET" class="row">
            <div class="col-md-12" style="margin-left: 300px;">
                <input class="form-control col-md-6 d-inline" style="margin-left: 20px;" type="text" name="keyword" value="{{ old('keyword') }}" />
                <button class="btn btn-primary col-2">Tìm kiếm</button>
            </div>
        </form>
    </div>
    <div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Tất cả loại phòng') }}</h3>
				</div>
				<div class="card-body pt-5">
					<div class="accordion" id="accordionVoiceList">

						<!-- Afrikaans -->
                        @foreach($data as $item)
						<div class="card">
							<div class="card-header" id="headingOne">
							  <h2 class="mb-0">
								  <button class="btn btn-link shadow-none text-left collapsed" type="button" data-toggle="collapse" data-target="#afrikaans" aria-expanded="true" aria-controls="collapseOne">
									  <i class="flag flag-za"></i> {{ $item->name }}
									</button>
							  </h2>
							</div>					  
						
					  	</div>
                          @endforeach
					  </div>
				</div>
			</div>
		</div>
	</div>
    @endsection
</body>

</html>