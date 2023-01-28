<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::create($request->post());
        return view('welcome');
    }

    public function show($id) {
        $users = User::where('id', $id)->get();
        if(sizeof($users) == 0) {
            return view('users.show', ['error'=>'User not found']);
        }
        $user = $users[0];
        return view('users.show', ['user'=>$user, 'error'=> null]);
    }

    public function index() {
        $users = User::orderBy('id', 'asc')->get();
        return view('users.index', compact('users'));
    }

    public function update(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->route('users.show', $user);
    }

    public function edit($id) {
        $user = User::where('id', $id)->get()[0];
        return view('users.edit', compact('user'));
    }

    public function destroy(User $user) {
        error_log("weijfwe");
        $user->delete();
        $users = User::orderBy('id', 'asc')->get();
        return view('users.index', compact('users'));
    }
}
