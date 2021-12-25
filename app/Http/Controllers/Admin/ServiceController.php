<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class ServiceController extends Controller
{
    public function index(){
        if (Gate::denies('View_Admin','CRUD_Service')) {
            abort(403);
        }
         $service =    Service::all();
    return view('admin/service/index' , compact('service'));
    }
    public function create(){
        if (Gate::denies('CRUD_Service')) {
            abort(403);
        }
        return view('admin/service/form');
    }
    public function store(Request $request){
        if (Gate::denies('CRUD_Service')) {
            abort(403);
        }
        $data = request()->except('_token');
        $result = Service::create($data);
        $alert='Đã Tạo Mới Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function edit($id){
        if (Gate::denies('CRUD_Service')) {
            abort(403);
        }
        $service = Service::find($id);
        return view('admin/service/form',compact('service'));
    }
    public function update(RequestService $request){
        if (Gate::denies('CRUD_Service')) {
            abort(403);
        }
        $result = Service::find($request['id']);
        $data = request()->except('_token','id');

        $result->update($data);
        $alert='Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function delete(Request $request){
        if (Gate::denies('CRUD_Service')) {
            abort(403);
        }
      $service= Service::find($request['id']);
      $service->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
