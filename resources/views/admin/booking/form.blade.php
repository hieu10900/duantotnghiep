    @extends('admin/layout_master/layout_master')

    @section('contents')
    <style>
        label.form-label{
            color: red;
        }
        li.active {
        padding: 0.5rem;
    }
            span.form-label {
            color: red;
            font-weight: 600;
        }
                    .form-control {
                background: antiquewhite;
            }
                        .col-md-10 {
                background: #fff8f6;
            }
    </style>
        <div class="">


            @if(session('alert'))

                <section class='alert alert-success'>{{session('alert')}}</section>

            @endif

            <form method="POST"
                @if(isset($booking_data))
                action="{{route('admin.booking.update')}}"
                @else
                action="{{route('admin.booking.store')}}"
                @endif
            >
                @csrf
                <div class="row">
                    @if(isset($booking_data))
                        <input type="hidden" name="id" value="{{$booking_data->id}}">
                        <input type="hidden" name="user_id" value="{{$booking_data->user_id}}">
                    @endif
                    <div class="col-4">
                        <label for="exampleInputEmail1" class="form-label">Email
                            address</label>
                        <input placeholder="Email address" name="guest_email" type="email"
                            class="form-control text" id="exampleInputEmail1"
                            value="@if(isset($booking_data))
                            {{$booking_data->guest_email}}
                            @endif"
                            aria-describedby="emailHelp"/>
                        @error('guest_email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="col-4">
                        <label for="exampleName" class="form-label">Name</label>
                        <input placeholder="Name" type="text" class="form-control text"
                            name="guest_name"
                            value="@if(isset($booking_data))
                            {{$booking_data->guest_name}}
                            @endif"
                            id="exampleName" aria-describedby="textHelp"/>
                        @error('guest_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="examplePhone" class="form-label">Phone</label>
                        <input placeholder="Phone" type="text" class="form-control text"
                            name="phone"
                            value="@if(isset($booking_data))
                            {{$booking_data->phone}}
                            @endif"
                            id="examplePhone" aria-describedby="textHelp"/>
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="form-group">
                            <label for="examplePhone" class="form-label">Check in</label>
                            <input class="form-control"
                                value="@if(isset($booking_data)){{date('Y-m-d',strtotime($booking_data->check_in))}}@endif"
                                type="date" id="checkIn" name="check_in"
                                placeholder=""/>
                        </div>
                        @if(session('err_time'))
                            <span class="text-danger" id="check_inError">{{session('alert')}}</span>
                        @endif
                        @error('check_in')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="form-group">
                            <label for="examplePhone" class="form-label">Check out</label>
                            <input class="form-control" type="date" id="checkOut" name="check_out"
                                value="@if(isset($booking_data)){{date('Y-m-d',strtotime($booking_data->check_out))}}@endif"
                                placeholder=""/>
                            @error('check_out')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4 pr-0">
                        <label for="examplePhone" class="form-label">Discount</label>
                        <input placeholder="Discount" name="discount" type="text" class="form-control text"
                            value="@if(isset($booking_data))
                            @foreach($booking_data->discount as $discount)
                            {{$discount->code}}
                            @endforeach
                            @endif"
                            id="exampleDiscount" aria-describedby="textHelp"/>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="form-group">
                            <span class="form-label">Chon phòng</span>
                            <select class="form-control" name="room_id" id="room_id">
                                @foreach($room as $room)
                                    <option
                                        @if(isset($booking_data) && $booking_data->room_id == $room->id)
                                        selected
                                        @endif
                                        value="{{$room->id}}">{{$room->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" id="check_outError"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <span class="form-label">Adults</span>
                                <select class="form-control" name="amount_of_people" id="amount_of_people">
                                    @for($i=1;$i<6;$i++)
                                        <option value="{{$i}}"
                                                @if(isset($booking_data) && $booking_data->amount_of_people == $i)
                                                selected
                                            @endif
                                        >{{$i}}</option>
                                    @endfor
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                        </div>

                    </div>
                    @if(isset($booking_data))
                        <div class="col-4">
                            <span class="form-label selectpicker">Trạng Thái</span>
                            <select class="form-control" name="status" required
                            >
                                <option @if(isset($booking_data) && $booking_data->status == 0)
                                selected
                                @endif value="0">Chưa duyệt</option>
                                <option @if(isset($booking_data) && $booking_data->status == 1)
                                        selected
                                        @endif value="1">Đã duyệt</option>
                                <option @if(isset($booking_data) && $booking_data->status == 2)
                                        selected
                                        @endif value="2">Đã cọc</option>
                                <option @if(isset($booking_data) && $booking_data->status == 3)
                                        selected
                                        @endif value="3">Hoàn Thành</option>
                                <option @if(isset($booking_data) && $booking_data->status == 4)
                                        selected
                                        @endif value="4">Đã hủy</option>

                            </select>

                            <span class="select-arrow"></span>
                        </div>
                    @endif
                    <div class="col-4 mt-4">
                        <span class="form-label selectpicker">Services</span>
                        <select class="mutiselect form-control" id="services[]" name="services[]" 
                                multiple="multiple">

                            @foreach($service as $service)
                                <option value="{{$service->id}}"
                                        @if(isset($booking_data) && array_search($service->id, array_column($booking_data->service->toArray(), 'id')))
                                        selected
                                    @endif
                                >{{$service->name}}</option>
                            @endforeach
                        </select>

                        <span class="select-arrow"></span>
                    </div>
                    @if(isset($booking_data))
                    <div class="col-10 mt-3">
                        <button class="btn btn-primary" type="submit"> Chỉnh Sửa</button>
                    </div>
                    @else
                    <div class="col-10 mt-3">
                        <button class="btn btn-primary" type="submit"> Tạo Mới</button>
                    </div>
                    @endif
                

                </div>
            </form>
        </div>
    @endsection

    @push('js')
    @if(isset($booking_data))
    <script>
    $(".mutiselect").val({{json_encode(collect($booking_data->service)->pluck('id')->toArray())}});
    $(".mutiselect").multiselect("refresh");
        </script>
    @endif
    <script>
        $(document).ready(function(){
            $('.mutiselect').multiselect({
                nonSelectedText: 'Chọn dịch vụ ... ',
                enableHTML: true,
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
                buttonWidth:'250px',
            });
        });
        </script>
    @endpush
