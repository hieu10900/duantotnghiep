@extends('admin/layout_master/layout_master')

@section('contents')

    <div class="">
        @if(session('alert'))
            <section class='alert alert-success'>{{session('alert')}}</section>
        @endif
        <form method="POST"
              @if(isset($discount))
              action="{{route('admin.discount.update')}}"
              @else
              action="{{route('admin.discount.store')}}"
            @endif
        >
            @csrf
            @if(isset($discount))
                <input type="hidden" name="id" value="{{$discount->id}}">
                @endif
            <div class="row" style="width: 30%; margin: auto">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Tên Khuyến Mại</label>
                    <input placeholder="Điền vào Tên Khuyến Mại" name="full_name" type="text"
                           class="form-control text" id="exampleInputEmail1"
                           value="@if(isset($discount)){{$discount->full_name}}
                           @endif"
                           aria-describedby="emailHelp"/>
                    @error('full_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-12">
                    <label for="exampleName" class="form-label">Mã Code</label>
                    <input placeholder="Điền vào mã code Khuyến Mại" type="number" class="form-control text"
                           name="code"
                           value="@if(isset($discount)){{$discount->code}}@endif"
                           id="exampleName" aria-describedby="textHelp"/>
                    @error('code')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Số Lượng Code Còn Lại</label>
                    <input placeholder="Số Lượng" type="number" class="form-control text"
                           name="quantity"
                           value="@if(isset($discount)){{$discount->quantity}}@endif"
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Số Tiền Chiết Khấu</label>
                    <input placeholder="Số Tiền Chiết Khấu" type="text" class="form-control text"
                           name="discount_rate"
                           value="@if(isset($discount)){{$discount->discount_rate}}@endif"
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('discount_rate')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Trạng Thái</label>
                    <select class="form-control" name="status"
                    >
                        <option @if(isset($discount) && $discount->status == 0)
                                selected
                                @endif value="0">Còn Hạn </option>
                        <option @if(isset($discount) && $discount->status == 1)
                                selected
                                @endif value="1">Hết Hạn</option>

                    </select>
                </div>
                <div class="col-10 mt-3 ">
                    <button class="btn btn-secondary" type="submit">
                        @if(isset($discount))
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
