<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $lastUpdate = auth()->user()->updated_at;
        $lastUpdate = Carbon::parse($lastUpdate);
        $currentTime = Carbon::now();
        $timeDifference = $currentTime->diffForHumans($lastUpdate);

        return view('admin.admin_profile', compact('adminData','timeDifference'));
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

    public function ChangePassword()
    {
        return view('admin.admin_change_password');
    }

    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_password);
            $user->save();

            session()->flash('message','Password Updated Successfully');
            return redirect()->back();
        }else{
            session()->flash('message','Old Password İs not match');
            return redirect()->back();
        }
    }
}
