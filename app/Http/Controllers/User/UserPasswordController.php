<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\ValidateUserPasswordRule;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserPasswordController extends Controller
{
    public function index()
    {
        return view('user.profile.password.index');
    }

    public function update(Request $request, $id = null)
    {
        $request->validate([
            'current_password' => ['required', new ValidateUserPasswordRule ],
            'new_password' => ['required', Rules\Password::min(8)],
            'new_confirm_password' => ['required', 'same:new_password', Rules\Password::min(8)],
        ]);
        User::find(auth()->user()->id)->update(['password' => $request->new_password]);

        return redirect()->back()->with('success', 'Đã cập nhật mật khẩu thành công');
    }
}
