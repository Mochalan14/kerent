<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::all();
        $title = 'Daftar Role';
        return view('admin.role.index', compact('roles', 'title'));
    }

    public function create(Request $request)
    {
        return view('admin.role.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $roles = Role::create([
            'role' => $data['role'],
        ]);

        return redirect()->route('admin.role.index');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('admin.role.update',compact('role'));
    }

    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        $roles->role = $request->role;
        $roles->save();

        return redirect()->route('admin.role.index');
    }

    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
        
        return redirect()->route('admin.role.index');
    }
}
