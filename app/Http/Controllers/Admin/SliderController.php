<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class SliderController extends Controller
{
    public function index(Request $request)
    {
        if (Gate::denies('View_Admin','CRUD_Slide')) {
            abort(403);
        }
        $ListSlider = null;
        if($request->has('keyword') == true){
            $keyword = $request->get('keyword');
            $ListSlider = Slider::where('name', 'LIKE', "%$keyword%")->paginate(10);
        } else {
            $ListSlider = Slider::paginate(10);
        }
        return view('/admin/sliders/index', [
            'data' => $ListSlider,
        ]);
    }
    public function create()
    { 
        if (Gate::denies('CRUD_Slide')) {
            abort(403);
        }
        return view('/admin/sliders/create');
    }
    public function store(Request $request)
    {
        if (Gate::denies('CRUD_Slide')) {
            abort(403);
        }
        $data = request()->except('_token');
        $result = Slider::create($data);
        return redirect()->route('admin.sliders.index');
    }
    public function edit($id)
    { 
        if (Gate::denies('CRUD_Slide')) {
            abort(403);
        }
        $data = Slider::find($id);
        return view('admin/sliders/edit', compact('data'));
    }
    public function update($id)
    { 
        if (Gate::denies('CRUD_Slide')) {
            abort(403);
        }
        $data = request()->except('_token');
        $slider = Slider::find($id);
        $slider->update($data);

        return redirect()->route('admin.sliders.index');
    }
    public function delete($id)
    { 
        if (Gate::denies('CRUD_Slide')) {
            abort(403);
        }
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('admin.sliders.index');
    }
}
