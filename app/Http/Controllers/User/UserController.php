<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //support
    public function support()
    {
        $supports = Support::all();
        return view('user.support.index', compact('supports'));
    }
    public function createSupport()
    {
        return view('user.support.create');
    }
    public function storeSupport()
    {
    }
    public function deleteSupport($id)
    {
        $Room_types = Support::find($id);
        $Room_types->delete();
        return redirect()->route('user.support.index');
    }
}
