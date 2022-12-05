<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::orderBy('id', 'desc')->get();
        
        return view('admin.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(StoreAdminRequest $request)
    {
        $admin = new Admin();
            
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
        
        $admin->save();

        return redirect()->to('/admin/admin')->with('message', 'Successfully Create Admin');
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        
        return view('admin.admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        
        return view('admin.admin.edit', compact('admin'));
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        // dd($request->all());
        $admin = Admin::findOrFail($id);
            
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
        
        $admin->save();
            
        return redirect()->to('/admin/admin')->with('message', 'Successfully Update Admin!');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->to('/admin/admin')->with('message', 'Successfully Delete Admin!');
    }
}
