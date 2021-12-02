<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class UserController extends Controller
{
    public function index()
    {   
         if (!Gate::allows('CRUD_User')) {
           abort(403);
       }
        $User = User::all();
        return view('admin/user/index', compact('User'));
    }

    public function create()
    { 
        if (!Gate::allows('CRUD_User')) {
            abort(403);
        }
        $role = DB::table('roles')->get();
        return view('admin/user/form', compact('role'));
    }

    public function store(StoreRequest $request)
    { 
        if (!Gate::allows('CRUD_User')) {
            abort(403);
        }
        $data = request()->except('_token', 'password_confim', 'role');
        if (empty($request['avatar']) == false) {
            $image_name = request()->file('avatar')->getClientOriginalName();
            $path_avatar = request()->file('avatar')->move(public_path('image/user'), $image_name);
            $data['avatar'] = $image_name;
        }
        $result = User::create($data);
        if (isset($request['role']) == true) {
            $result->getRoles()->sync($request['role']);
        }
        $alert = 'Đã Tạo Mới Thanh Công!';
        return redirect()->back()->with('alert', $alert);
    }

    public function edit($id)
    { 
        if (!Gate::allows('CRUD_User')) {
            abort(403);
        }
        $user = User::find($id);
        $role = DB::table('roles')->get();
        return view('admin/user/form', compact('user', 'role'));
    }

    public function update(UpdateRequest $request)
    {
        if (!Gate::allows('CRUD_User')) {
            abort(403);
        }
        $result = User::find($request['id']);
        $data = request()->except('_token', 'password_confim', 'role', 'avatar_old', 'id');
        if (empty($request['avatar']) == false) {
            $image_name = request()->file('avatar')->getClientOriginalName();
            $path_avatar = request()->file('avatar')->move(public_path('image/user'), $image_name);
            $data['avatar'] = $image_name;
        } else {
            $data['avatar'] = $request['avatar_old'];
        }
        $result->update($data);
        if (isset($request['role']) == true) {
            $result->getRoles()->sync($request['role']);
        }
        $alert = 'Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert', $alert);
    }

    public function delete(Request $request)
    {
        if (!Gate::allows('CRUD_User')) {
            abort(403);
        }
        $User = User::find($request['id']);
        $User->delete();
        $User->getRoles()->detach();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
