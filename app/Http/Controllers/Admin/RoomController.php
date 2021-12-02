<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\StoreRequest;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\RoomTyPe;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class RoomController extends Controller
{
    use StorageImageTrait;
    public function index(Request $request)
    {
        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $Rooms = null;
        if ($request->has('keyword') == true) {
            $keyword = $request->get('keyword');
            $Rooms = DB::table('rooms')
                ->select('rooms.id', 'rooms.name', 'rooms.introduce', 'rooms.room_type', 'rooms.price', 'rooms.introduce_of_room', 'rooms.status', 'rooms.feature_image_path', 'room_types.name as name_type')
                ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
                ->where('rooms.name', 'LIKE', "%$keyword%")
                ->paginate(10);
        } else {
            $Rooms = DB::table('rooms')
                ->select('rooms.id', 'rooms.name', 'rooms.introduce', 'rooms.room_type', 'rooms.price', 'rooms.introduce_of_room', 'rooms.status', 'rooms.feature_image_path', 'room_types.name as name_type')
                ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
                ->paginate(10);
        }
        return view('/admin/rooms/index', [
            'data' => $Rooms,
        ]);
    }

    public function create()
    {
        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $Room_types = RoomTyPe::paginate(10);
        return view('/admin/rooms/create', [
            'data' => $Room_types,
        ]);
    }

    public function store(StoreRequest $request)
    {
        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $result = [
            'name' => $request->name,
            'introduce' => $request->introduce,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'introduce_of_room' => $request->introduce_of_room,
        ];

        $dataUploadFileRoooms = $this->storageImageUpload($request, 'feature_image_path', 'room_images');

        if (!empty($dataUploadFileRoooms)) {
            $result['feature_image_path'] = $dataUploadFileRoooms['file_path'];
        }

        $rooms = Room::create($result);

        if ($request->hasFile('image')) {
            foreach ($request->image as $fileItem) {
                $dataUploadFile = $this->storageImageUploadMutiple($fileItem, 'room_images');
                ImageRoom::create([
                    'room_id' => $rooms->id,
                    'image' => $dataUploadFile['file_path'],
                ]);
            }
        }

        return redirect()->route('admin.rooms.index');
    }

    public function edit($id)
    {
        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $data = Room::find($id);
        $room_types = RoomTyPe::all();
        $imageRooms = DB::table('image_rooms')->where('room_id', $id)->get();
        return view('admin/rooms/edit', compact('data', 'room_types', 'imageRooms'));
    }

    public function update($id, Request $request)
    {

        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $data = Room::find($id);
        $result = [
            'name' => $request->name,
            'introduce' => $request->introduce,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'introduce_of_room' => $request->introduce_of_room,
        ];
        $dataUploadFileRoooms = $this->storageImageUpload($request, 'feature_image_path', 'rooms');

        if (!empty($dataUploadFileRoooms)) {

            $result['feature_image_path'] = $dataUploadFileRoooms['file_path'];
        }
        $rooms = Room::find($id);
        $rooms->update($result);

        if ($request->hasFile('image')) {
            foreach ($request->image as $fileItem) {
                $dataUploadFile = $this->storageImageUploadMutiple($fileItem, 'rooms');
                $data->update([
                    'room_id' => $rooms->id,
                    'image' => $dataUploadFile['file_path'],
                ]);
            }
        }

        return redirect()->route('admin.rooms.index');
    }
    public function delete($id)
    {
        if (Gate::denies('View_Admin','CRUD_Room')) {
            abort(403);
        }
        $rooms = Room::find($id);
        $rooms->delete();
        return redirect()->route('admin.rooms.index');
    }
}
