<?php

namespace App\Http\Controllers;

use App\CheckPoint;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return View('/users/index')->with(['users' => $users]);
    }

    public function enable($id)
    {
        $user = User::find($id);
        $user->active = true;
        $user->save();

        return redirect()->intended('/admin/users');
    }

    public function disable($id)
    {
        $user = User::find($id);
        $user->active = false;
        $user->save();

        return redirect()->intended('/admin/users');
    }
}
