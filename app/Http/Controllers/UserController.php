<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function login_page()
    {
        return view('admin.auth.login');

    }
    public function register_page()
    {
        return view('admin.auth.register');

    }
    public function home()
    {
        try {
            $albums = Album::orderBy('id', 'desc')->get();

            return view('albums.index', ['albums' => $albums]);

        } catch (Exception $ex) {
            return redirect()->route('users.login_page')->with(['error' => ' حدث خطأ  ما']);

        }
    }

    public function register_post(StoreUserRequest $request)
    {

        $user = new User();
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // the best place on model

        $user->save();
        // save the new user data
        if ($user->save()) {
            return redirect()->route('products.index')->with(['success' => 'تم الحفظ بنجاح']);
        } else {
            return redirect()->route('admins.login_page')->with(['error' => 'حدث خطا ما']);
        }

    }
    public function login_post(LoginUserRequest $request)
    {

        try {

            if (auth()->guard('admin')->attempt(array('email' => $request->email, 'password' => $request->password))) {
                dd('yes');
                return redirect()->route('products.index');

            } else {
                return redirect()->route('admins.login_page')
                    ->with('error', 'Email-Address or Password Are Wrong.');
            }

        } catch (Exception $ex) {
            return redirect()->route('admins.login_page')->with(['error' => ' حدث خطأ  ما']);

        }

    }
    public function logout()
    {

        Session::flush();

        Auth::logout();

        return redirect()->route('admins.login_page');
    }
}
