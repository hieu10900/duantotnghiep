<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\Post;
use App\Models\Service;
use App\Models\RoomTyPe;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evaluate;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $ListSlider = Slider::where('status', 1)->paginate(10);
        $post = Post::orderBy('created_at', 'asc')->first();
        $post_new = Post::orderBy('created_at', 'desc')
        ->first();
        $room = DB::table('rooms')
        ->select('rooms.id', 'rooms.name as name_room', 'rooms.introduce', 'rooms.price', 'rooms.feature_image_path', 'rooms.status', 'room_types.name')
        ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
        ->where('status', 0)
        ->paginate(10);
        return view('frontend/layouts/master', [
            'data' => $ListSlider,
            'post' => $post,
            'post_new' => $post_new,
            'room' => $room
        ]);
    }

    public function room_types($id)
    {
        $Romm_types = RoomTyPe::find($id);
        $ListRooms = DB::table('rooms')
            ->select('rooms.id', 'rooms.name as name_room', 'rooms.introduce', 'rooms.price', 'rooms.feature_image_path', 'rooms.status', 'room_types.name')
            ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
            ->where('rooms.room_type', $id)
            ->where('status', 0)
            ->paginate(8);
        return view('frontend/layouts/room_type', compact('ListRooms', 'Romm_types'));
    }
    public function room_detail($id)
    {
        $Room_detail = Room::find($id);
        $cate_id = $Room_detail->room_types->id;
        $cate_name = $Room_detail->room_types->name;
        $Image_room = ImageRoom::where('room_id', $id)->get();
        $cate = $Room_detail->id;
        $ton = DB::table('image_rooms')->select('image_rooms.room_id', 'image_rooms.image')->where('image_rooms.room_id', $cate)->count();
        $tong = $ton + 1;
        $listComments  = DB::table('comments')
            ->select('comments.id as cmt_id', 'comments.content', 'comments.room_id', 'comments.created_by', 'comments.created_at', 'users.id as id_cmt', 'users.full_name')
            ->join('users', 'comments.created_by', '=', 'users.id')->join('rooms', 'comments.room_id', '=', 'rooms.id')
            ->where('comments.room_id', $id)
            ->paginate(10);
        // dd($listComments);
        $listValute  = DB::table('evaluate')
            ->select('evaluate.id as cmt_id', 'evaluate.content', 'evaluate.created_at', 'bookings.guest_email', 'users.full_name')
            ->join('bookings', 'bookings.id', '=', 'evaluate.booking_id')
            ->join('users', 'bookings.guest_email', '=', 'users.email')
            ->where('bookings.room_id', $id)
            ->paginate(10);

        $splq = Room::Where('room_type', $cate_id)->paginate(4);
        $service = Service::all();
        return view('frontend/layouts/room_detail', compact('Room_detail', 'Image_room', 'listComments', 'splq', 'cate_name', 'service', 'tong', 'listValute'));
    }

    public function comment($id, Request $request)
    {
        if (Auth::check()) {
            $data = Comment::create([
                'content' => $request->content,
                'room_id' => $id,
                'created_by' => auth()->id(),
            ]);
            return redirect()->back()->with('success', 'Cám ơn bạn đã phản hồi!');
        } else {
            return redirect()->back()->with('success', 'Vui lòng đăng nhập!');
        }
    }

    public function remove_comment(Request $request, $id)
    {
        $id_comment = Comment::find($id);
        $id_comment->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}
