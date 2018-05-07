<?php

namespace Exercise\Http\Controllers;

use DB;
use Exercise\User;
use Illuminate\Http\Request;

use Exercise\CustomCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        return view('user.index')->with('user', $user);
    }

    public function getShow(Request $request)
    {
        $users = User::orderBy('name','ASC')->search($request->search)->get();
        return view('user.show')->with('users', $users);
    }

    // public function getCreate()
    // {
    //     return view('auth.register');
    // }

    // public function postCreate()
    // {
    //
    //   return view('auth.register');
    // }

    // public function getEdit($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('user.edit')->with('user', $user);
    // }

    // public function putEdit(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->name = $request->name;
    //
    //     $user->save();
    //
    //     return redirect('auth.register');
    // }
}
