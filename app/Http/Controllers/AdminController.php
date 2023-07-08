<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'logout success',
            'alert-type' => 'success',
        );
        return redirect('/login')->with($notification);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_edit', compact('editData'));
    }

    public function upload(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['profile_image'] = $filename;
        }
        $data->save();

        $notification = array(
        'message' => 'Admin Profile updated successfully',
        'alert-type' => 'success',
    );
        return redirect()->route('admin.profile')->with($notification);

    }
}
