<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\Auths\LoginRequest;
use App\Http\Requests\Clients\Auths\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function register()
    {
        return view('frontend.auths.register');
    }
    public function registerPost(StoreRequest $request)
    {
        $data = request()->except('_token');
        $result = User::create([
            'full_name' => $request->full_name,
            'avatar' => $request->full_name,
            'email' => $request->email,
            'password' => $request->password,
            'api_token' => Str::random(20),
        ]);
        return redirect()->route('home')->with('success', 'Đăng ký thành công');
    }
    public function login()
    {
        return view('frontend.auths.login');
    }
    public function loginPost(LoginRequest $request)
    {
        $data = $request->only([
            'email',
            'password',
        ]);

        /*
         * Auth::attempt(['email', 'password'])
         * return false nếu login thất bại
         * return true nếu login thành công
         */
        $result = Auth::attempt($data);
        if ($result === false) {
            session()->flash('error', 'Thông tin đăng nhập sai hoặc tài khoản của bạn đã bị khóa !');

            return back();
        }

        return redirect()->route('home')->with('success', 'Đăng nhập thành công');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
			session()->put('state', $request->input('state'));
			$user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
			// dd("err", $e);
            return redirect()->route('auth.getLoginForm');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->full_name        = $user->name;
            $newUser->email           = $user->email;
            $newUser->password        = 12345678;
            $newUser->avatar          = $user->avatar;
            
            $newUser->save();

			auth()->login($newUser, true);
			// dd("save done");
        }

        return redirect()->route('home')->with('success', 'Đăng nhập thành công');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
