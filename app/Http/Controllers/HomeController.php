<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main_home()
    {
        return view('home');
    }

    public function index()
    {
        return view('backend.home');
    }

    public function password_settings()
    {
        $data['user'] = auth()->user();
        return view('backend.profile.password_settings', $data);
    }

    public function password_update(Request $request)
    {
        $user = auth()->user();
        $rules = [
            'password' => 'required|string|min:6|confirmed',
            'current_password' => 'required|string|',
        ];
        $validator = Validator::make($request->except('_token'), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }
        
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success', 'Password updated successfully.');
        } else {
            return back()->with('error', 'Current Password is not matching.');
        }
    }
}
