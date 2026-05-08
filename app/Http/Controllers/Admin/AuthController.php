<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([

            'email' => 'required|email',

            'password' => 'required',

        ]);

        $admin = Admin::where(
            'email',
            $request->email
        )->first();

        if (
            !$admin ||
            !Hash::check(
                $request->password,
                $admin->password
            )
        ) {

            return back()->withErrors([

                'login' =>
                    'Email atau password salah.'

            ])->withInput();

        }

        session([

            'admin_logged_in' => true,

            'admin_id' => $admin->id,

            'admin_name' => $admin->name

        ]);

        return redirect('/admin');
    }

    public function logout()
    {
        session()->flush();

        return redirect('/admin/login');
    }
}