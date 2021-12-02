@extends('admin/layout_master/layout_master')

@section('contents')

    <div class="">
        @if(session('alert'))
            <section class='alert alert-success'>{{session('alert')}}</section>
        @endif
        <form method="POST"
              @if(isset($service))
              action="{{route('admin.service.update')}}"
              @else
              action="{{route('admin.service.store')}}"
            @endif
        >
            @csrf
            @if(isset($service))
                <input type="hidden" name="id" value="{{$service->id}}">
                @endif
            <div class="row" style="width: 30%; margin: auto">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Tên Dịch Vụ</label>
                    <input placeholder="Điền vào Tên Dịch Vụ" name="name" type="text"
                           class="form-control text" id="exampleInputEmail1"
                           value="@if(isset($service)){{$service->name}}
                           @endif"
                           aria-describedby="emailHelp"/>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-12">
                    <label for="exampleName" class="form-label">Giá Tiền</label>
                    <input placeholder="Điền vào Giá Dịch Vụ" type="number" class="form-control text"
                           name="price"
                           value="@if(isset($service)){{$service->price}}@endif"
                           id="exampleName" aria-describedby="textHelp"/>
                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Phone</label>
                    <input placeholder="Số Lượng" type="number" class="form-control text"
                           name="quantity"
                           value="@if(isset($service)){{$service->quantity}}@endif"
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-10 mt-3 ">
                    <button class="btn btn-secondary" type="submit">
                        @if(isset($service))
                            Cập Nhật
                        @else
                            Tạo Mới
                        @endif
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection

@push('js')

@endpush
