<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function show(User $user) {
        return view('user.show', ['user' => $user]);
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'category_id' => 'required|numeric',
            'author_id' => 'required|numeric',
            'title' => 'required',
            'content' => 'required'
        ]);

        $user = User::create($data);

        return redirect(route('user.show', ['user' => $user]))->with('success', 'User Created!');
    }

    public function edit(User $user) {
        return view('user.edit', ['user' => $user]);
    }

    public function update(User $user, Request $request) {
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $user->update($data);

        return redirect(route('user.show'))->with('success', 'User Updated!');
    }

    public function destroy(User $user) {
        $user->delete();

        return redirect(route('blogs.index'))->with('success', 'User Deleted!');
    }
}
