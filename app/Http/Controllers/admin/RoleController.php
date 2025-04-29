<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('dashboard.role.list' , compact('roles'));
    }
    public function create(){
        return view('dashboard.role.create');
    }

    public function store(Request $request){
        Role::create([
            'name'=>$request->name
        ]);
        return redirect()->route('roles.list');
    }

    public function show(Role $role){
        return view('dashboard.role.edit' , compact('role'));
    }

    public function update(Request $request , Role $role){
        $role->update([
            'name'=>$request->name
        ]);
        return redirect()->route('roles.list');
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('roles.list');
    }
}
