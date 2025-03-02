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
        $data['user'] = User::first();
        return view('home', $data);
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

    public function avatar_settings()
    {
        $data['user'] = auth()->user();
        return view('backend.profile.avatar_settings', $data);
    }

    public function contact_settings()
    {
        $data['user'] = auth()->user();
        return view('backend.profile.contact_settings', $data);
    }

    public function cv_settings()
    {
        $data['user'] = auth()->user();
        return view('backend.profile.cv_settings', $data);
    }

    public function about_settings()
    {
        $data['user'] = auth()->user();
        return view('backend.profile.about_settings', $data);
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

    public function avatar_update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'files' => 'required',
        ]);
        $avatar = null;
        foreach($request->files as $k => $file)
        {
            $file = $file;
            $name = str_replace(' ','_',$user->name).'.'.$file->getClientOriginalExtension();
            $file->move(public_path() . '/avatar', $name);
            $avatar = '/avatar/' . $name;
        }
        
        $user->avatar = $avatar;
        $user->save();
        
        return back()->with('success', 'updated successfully.');
    }

    public function contact_update(Request $request)
    {
        auth()->user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'whatsapp_phone' => $request->whatsapp_phone,
            'facebook' => $request->facebook,
            'github' => $request->github,
            'address' => $request->address,
            'linkd_in' => $request->linkd_in,
        ]);
        
        return back()->with('success', 'updated successfully.');
    }

    public function cv_update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'files' => 'required',
        ]);
        $avatar = null;
        foreach($request->files as $k => $file)
        {
            $file = $file;
            $name = $user->name.'.'.$file->getClientOriginalExtension();
            $file->move(public_path() . '/cv', $name);
            $cv_path = '/cv/' . $name;
        }

        $user->cv_path = $cv_path;
        $user->save();
        
        return back()->with('success', 'updated successfully.');
    }

    public function about_update(Request $request)
    {
        $request->validate([
            'about_self' => 'required|string',
        ]);
        auth()->user()->update([
            'about_self' => $request->about_self,
        ]);
        
        return back()->with('success', 'updated successfully.');
    }
}
