<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\PassSenMail;
use App\Models\RoomTyPe;
use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function GuzzleHttp\Psr7\str;

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

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|max:20',
            'address' => 'nullable|string|max:255',
        ]);
        $user = User::where('id', $id)->first();
        if (request()->has('avatar')) {

            request()->validate([
                'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048'
            ]);

            $file = $request->avatar;
            $fileNameHas = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file('avatar')->storeAs('public/' . 'avatar' . '/' . auth()->id(), $fileNameHas);
            $dataUploadTrait = [
                'file_path' => Storage::url($filePath),
            ];
            $user->avatar = $dataUploadTrait['file_path'];
        }

        $user->full_name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('user.profile.index');
    }
    public function forget()
    {
        return view("frontend.auths.forget_password");
    }
    public function forget_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->with('success', 'email không hợp lệ');
        }
        $pass = Str::random(8);
        $user->update([
            'password' => $pass,
        ]);

        Mail::to($email)->send(new PassSenMail($pass));
        return redirect()->route('home')->with('success', 'Mật khẩu đã được gửi về mail!');
    }

    public function view(Request $request)
    {
        $Room_types = null;
        if ($request->has('keyword') == true) {
            $keyword = $request->get('keyword');
            $Room_types = RoomTyPe::where('name', 'LIKE', "%$keyword%")->paginate(10);
        } else {
            $Room_types = RoomTyPe::paginate(10);
        }
        return view('user.roomtype.index', [
            'data' => $Room_types,
        ]);
    }
}
