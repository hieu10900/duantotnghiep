<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestDiscount;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class DiscountController extends Controller
{
    public function index(){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        $discount =    Discount::all();
        return view('admin/discount/index' , compact('discount'));
    }
    public function create(){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        return view('admin/discount/form');
    }
    public function store(RequestDiscount $request){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        $data = request()->except('_token');
        $result = Discount::create($data);
        $alert='Đã Tạo Mới Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function edit($id){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        $discount = Discount::find($id);
        return view('admin/discount/form',compact('discount'));
    }
    public function update(RequestDiscount $request){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        $result = Discount::find($request['id']);
        $data = request()->except('_token','id');

        $result->update($data);
        $alert='Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function delete(Request $request){
        if (Gate::denies('CRUD_Discount')) {
            abort(403);
        }
        $discount= Discount::find($request['id']);
        $discount->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
