<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class loginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function processLogin(LoginRequest $request) {
        $user = User::all()->toArray();
        foreach ($user as $key => $value) {
            if ($request->email == $value['Email'] && $request->password == $value['Password']) {
                $request->session()->regenerate();
//                $this->authorize('view', $user);
                return Redirect::route('admin.home');
            }
        }
        return back();
    }
}
