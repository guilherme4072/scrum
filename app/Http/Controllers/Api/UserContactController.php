<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserContact;
use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc');
        return view('user.index', ['user' => $user]);
        //return UserContact::with('users')->Get();
    }

    public function store()
    {
        return UserContact::create(request()->all());
    }

    public function show(UserContact $userContact)
    {
        return $userContact;
    }

    public function update(UserContact $userContact)
    {
        $userContact->update(request()->all());
        return $userContact;
    }

    public function destroy(UserContact $userContact)
    {
        $userContact->delete();
        return response()->json(['result' => 'ok']);
    }
}
