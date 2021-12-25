<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $list_support = DB::table('supports')
            ->select('supports.id', 'supports.name', 'supports.email', 'supports.phone', 'supports.message', 'supports.subject', 'supports.created_at', 'supports.updated_at', 'supports.status', 'users.email')
            ->join('users', 'supports.user_id', '=', 'users.id')
            ->paginate(10);
        // $list_support = Support::paginate(10);
        $tong = Support::count();
        return view('/admin/supports/index', [
            'data' => $list_support,
            'tong' => $tong
        ]);
    }
    public function edit($id)
    {
        $data = Support::find($id);
        return view('/admin/supports/edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = request()->except('_token');
        $support = Support::find($id);
        $support->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.supports.index');
    }
    public function delete($id)
    { 
        $support = Support::find($id);
        $support->delete();
        return redirect()->route('admin.supports.index');
    }

}
