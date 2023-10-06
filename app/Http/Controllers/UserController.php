<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function show(User $user) {
        return view('user.show', ['user' => $user]);
    }

    public function showLogin() {
        return view('user.login');
    }

    public function login(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'string'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('blog.index'));
        }

        return back()->withErrors([
            'username' => 'Invalid username/password.'
        ])->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect(route('blog.index'));
    }

    public function create() {
        return view('user.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'email' => 'required|string|email|unique:users', 
            'username' => 'required|string|alpha_num|max:25',
            'password' => 'required'
        ]);

        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('blog.index'))->with('success', 'User Created!');
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

        return redirect(route('user.index'))->with('success', 'User Deleted!');
    }
}
