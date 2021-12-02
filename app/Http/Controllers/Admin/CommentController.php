<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {   
      
        $listComments = DB::table('comments')
        ->select('comments.id', 'comments.content', 'comments.room_id', 'comments.created_by', 'comments.created_at', 'rooms.feature_image_path','users.id')
        ->join('rooms', 'comments.room_id', '=', 'rooms.id')
        ->join('users', 'comments.created_by', '=', 'users.id')
        ->orderByDesc('created_at')
        ->paginate(10);

        return view('admin/comments/index', [
            'data' => $listComments,
        ]);
    }

    public function getComment($id)
    {
        $listComments = DB::table('comments')
        ->select('comments.id', 'comments.content', 'comments.room_id', 'comments.created_by', 'comments.created_at', 'rooms.feature_image_path','users.id')
        ->join('rooms', 'comments.room_id', '=', 'rooms.id')
        ->join('users', 'comments.created_by', '=', 'users.id')
        ->where('comments.room_id', $id)
        ->paginate(10);
        return view('admin/comments/detail', [
            'data' => $listComments,
        ]);
    }

    public function commentCt($id)
    {
        $Room_detail = Room::find($id);
        $cate_id = $Room_detail->room_types->id;
        $cate_name = $Room_detail->room_types->name;
        $Image_room = ImageRoom::where('room_id', $id)->get();
        $cate = $Room_detail->id;

        $ton = DB::table('image_rooms')->select('image_rooms.room_id', 'image_rooms.image')
        ->where('image_rooms.room_id', $cate)
        ->count();

        $tong = $ton + 1;
        $listComments  = DB::table('comments')
        ->select('comments.id as cmt_id', 'comments.content', 'comments.room_id', 'comments.created_by', 'comments.created_at', 'users.id as id_cmt', 'users.full_name')
        ->join('users', 'comments.created_by', '=', 'users.id')->join('rooms', 'comments.room_id', '=', 'rooms.id')
        ->where('comments.room_id', $id)
        ->paginate(10);
        
        $splq = Room::Where('room_type', $cate_id)->paginate(4);
        $service = Service::all();
        return view('frontend/layouts/room_detail', compact('Room_detail', 'Image_room', 'listComments', 'splq', 'cate_name', 'service', 'tong'));
    }

    public function delete($id)
    {
        $id_comment = Comment::find($id);
        dd($id_comment);
        $id_comment->delete();
        return redirect()->back();
    }
}
