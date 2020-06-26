<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::create(request()->all());
    }

    public function store()
    {
        return Role::create(request()->all());
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function update(Role $role)
    {
        $role->update(request()->all());
        return $role;
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json(['result' => 'ok']);
    }
}
