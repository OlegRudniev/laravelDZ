<?php

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'is_admin' => 'nullable|boolean',
        ]);

        $user->update($request->only(['name', 'email', 'is_admin']));

        return redirect()->route('admin.users.index')->with('success', 'Профиль пользователя обновлен!');
    }
}
