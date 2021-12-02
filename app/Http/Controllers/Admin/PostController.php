<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\storePost;
use App\Http\Requests\Post\updatePost;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class PostController extends Controller
{

    public function index()
    {
        if (Gate::denies('View_Admin','CRUD_Post')) {
            abort(403);
        }
        $posts = Post::all();
        return view('admin/posts/index', compact('posts',));
    }
    public function store()
    {
        if (Gate::denies('View_Admin','CRUD_Post')) {
            abort(403);
        }
        $request = request()->all();
        if (empty($request['image']) == false) {
            $image = request()->file('image');
            $image_name = $image->getClientOriginalName();
            request()->file('image')->move(public_path('image/product'), $image_name);
            $request['image'] = $image_name;
        } else {
            $request['image'] = "nen_thom_01.jpg";
        }
        $request['created_by']= Auth::id();
        Post::Create($request);
        return response()->json([
            'status' => '200',
            'message' => 'Thêm mới thành công',
        ]);
    }
    public function edit($id)
    {
        if (Gate::denies('View_Admin','CRUD_Post')) {
            abort(403);
        }
        $editPost = Post::find($id);
        return response()->json(compact('editPost'));
    }

    public function update( Request $request)
    {
        if (Gate::denies('View_Admin','CRUD_Post')) {
            abort(403);
        }
        $request = request()->all();
        $post =  Post::find($request['id']);
        if (empty($request['image']) == false) {
            $image = request()->file('image');
            $image_name = $image->getClientOriginalName();
            request()->file('image')->move(public_path('image/product'), $image_name);
            $request['image'] = $image_name;
        }
        // $data['image'] = "nen_thom_01.jpg";
        $request['access'] = "0";
        $post->update($request);
        return response()->json([
            'status' => '200',
            'message' => 'Chỉnh sửa thành công',
        ]);
    }
    public function delete()
    {
        if (Gate::denies('View_Admin','CRUD_Post')) {
            abort(403);
        }
        $id = request()->id;
        Post::find($id)->delete();

        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
