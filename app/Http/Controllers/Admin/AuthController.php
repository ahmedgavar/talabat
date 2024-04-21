<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
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
    public function login(LoginUserRequest $request)
    {

        try {

            if (auth()->guard('admin')->attempt(array('email' => $request->email, 'password' => $request->password))) {
                return redirect()->route('products.index');

            } else {
                return redirect()->route('admins.login_page')
                    ->with('error', 'Email-Address or Password Are Wrong.');
            }

        } catch (Exception $ex) {
            return redirect()->route('admins.login_page')->with(['error' => ' حدث خطأ  ما']);

        }

    }
    public function register_post(Request $request)
    {
        User::create([
            'username' => 'gggg',
            'name' => 'kkk',
            'email' => 'ddd@fff.ccjj',
            'password' => 'jjj',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
