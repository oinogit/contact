<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function create() {
        return view('users.user');
    }
    public function store(UserRequest $request) {
        User::create($request->all());
        return redirect();
    }
    public function index() {
            return view('users.login');
    }
}
