<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('groups')->Get();
    }

    public function store()
    {
        return User::create(request()->all());
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(User $user)
    {
        $user->update(request()->all());
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['result' => 'ok']);
    }
}
