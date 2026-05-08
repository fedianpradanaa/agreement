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
        $admin = Admin::where(
            'email',
            $request->email
        )->first();

        if (!$admin) {

            return back()->withErrors([
                'email' => 'Email tidak ditemukan'
            ]);

        }

        if (!Hash::check(
            $request->password,
            $admin->password
        )) {

            return back()->withErrors([
                'password' => 'Password salah'
            ]);

        }

        session([

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