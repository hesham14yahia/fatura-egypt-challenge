<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $userRequest)
    {
        $data = $userRequest->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);

        return redirect()->route('users.create');
    }
}
