<?php
public function handle(Request $request, Closure $next)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $request->user->id,
        'is_admin' => 'nullable|boolean',
    ]);

    if ($validator->fails()) {
        return redirect()->route('admin.users.edit', $request->user)
            ->withErrors($validator)
            ->withInput();
    }

    return $next($request);
}
