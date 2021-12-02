<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\room_types\StoreRequest;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class RoomTyPeController extends Controller
{
    public function index(Request $request)
    { 
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        $Room_types = null;
        if($request->has('keyword') == true){
            $keyword = $request->get('keyword');
            $Room_types = RoomTyPe::where('name', 'LIKE' , "%$keyword%")->paginate(10);
        } else {
            $Room_types = RoomTyPe::paginate(10);
        }
        return view('/admin/categories/index', [
            'data' => $Room_types,
        ]);
    }

    public function create()
    {
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        return view('admin/categories/create');
    }
    public function store(StoreRequest $requets)
    {
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        $data = request()->except('_token');
        $result = RoomTyPe::create($data);
        return redirect()->route('admin.categories.index');
    }
    public function edit($id)
    {
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        $data = RoomTyPe::find($id);
        return view('admin/categories/edit', compact('data'));
    }
    public function update($id)
    {
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        $data = request()->except('_token');
        $Room_types = RoomTyPe::find($id);
        $Room_types->update($data);

        return redirect()->route('admin.categories.index');
    }
    public function delete($id)
    {
        if (Gate::denies('View_Admin','CRUD_RoomType')) {
            abort(403);
        }
        $Room_types = RoomTyPe::find($id);
        $Room_types->delete();
        return redirect()->route('admin.categories.index');
    }
}
