<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = User::count();
        return view('dashboard.index')->with('data',$data);
    }

    public function indexUser()
    {
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    public function deleteUser(Request $request, $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('users'));
    }

    public function editUser($id)
    {
       $data = User::where('id', $id)->first();
       return view('admin.edit-user', compact('data'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = User::where('id', $id)->first();

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        
        return redirect(route('users'))->with('edit', 'Berhasil eidt data user');
    }

    
}
