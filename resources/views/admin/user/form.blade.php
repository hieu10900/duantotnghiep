@extends('admin/layout_master/layout_master')

@section('contents')

    <div class="">
        @if(session('alert'))
            <section class='alert alert-success'>{{session('alert')}}</section>
        @endif
        <form method="POST" enctype="multipart/form-data"
              @if(isset($user))
              action="{{route('admin.user.update',['id' => $user->id] )}}"
              @else
              action="{{route('admin.user.store')}}"
            @endif
        >
            @csrf
            @if(isset($user))
               <p> Cập Nhật Thông Tin Người Dùng</p>
                <input type="hidden" name="id" value="{{$user->id}}">
                @else
                <p> Tạo Mới Tài Khoản Người Dùng</p>
            @endif
            <div class="row" style="width: 30%; margin: auto">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Tên Người Dùng</label>
                    <input placeholder="Điền vào tên người dùng" name="full_name" type="text"
                           class="form-control text" id="exampleInputEmail1"
                           value="@if(isset($user)){{$user->full_name}}@endif"
                           aria-describedby="emailHelp"/>
                    @error('full_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-12">
                    <label for="exampleName" class="form-label">Đia chỉ email</label>
                    <input placeholder="Điền vào mã code Khuyến Mại" type="text" class="form-control text"
                           name="email"
                           value="@if(isset($user)){{$user->email}}@endif"
                           id="exampleName" aria-describedby="textHelp"/>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    @if(isset($user))<img src="{{ asset('image/user/'.$user->avatar) }}" height="200px" width="200px">
                    <input type="hidden" name="avatar_old" value="{{$user->avatar}}">
                    @endif
                    <label for="exampleName" class="form-label">Ảnh đại diện</label>
                    <input type="file" name="avatar">
                    @error('avatar')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <label for="examplePhone" class="form-label">Mật Khẩu</label>
                    <input placeholder="nhập vào mật khẩu" type="password" class="form-control text"
                           name="password"
                           value=""
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Nhập Lại Mật Khẩu</label>
                    <input placeholder="nhập vào mật khẩu" type="password" class="form-control text"
                           name="password_confirm"
                           value=""
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('password_confirm')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Địa Chỉ</label>
                    <input placeholder="Địa chỉ" type="text" class="form-control text"
                           name="address"
                           value="@if(isset($user)){{$user->address}}@endif"
                           id="examplePhone" aria-describedby="textHelp"/>
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="examplePhone" class="form-label">Giới Tính</label>
                    <select class="form-control" name="gender"
                    >
                        <option @if(isset($user) && $user->gender == 0)
                                selected
                                @endif value="0">Nam
                        </option>
                        <option @if(isset($user) && $user->gender == 1)
                                selected
                                @endif value="1">Nữ
                        </option>
                    </select>
                </div>
                <div class="col-12 ">
{{--@dd($user->getRoles()->id);--}}
                    <label>Quyền tài Khoản</label>
                    <div class="row">
                        @foreach($role as $role)
                            <div class="form-check col-6">
                                <input class="form-check-input" type="checkbox"
{{--                                       @if(in_array($role->id,$roleOfuser))--}}
{{--                                         checked  @endif--}}
                                       value="{{$role->id}}" name="role[]">
                                <label class="form-check-label" for="">
                                    {{$role->code}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-10 mt-3 ">
                    <button class="btn btn-secondary" type="submit">
                        @if(isset($user))
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
