<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $users =  User::paginate(10);
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    public function destroy()
    {
    }
}
