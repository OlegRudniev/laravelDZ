<?php
public function handle(Request $request, Closure $next)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    if ($validator->fails()) {
        return redirect()->route('register.form')
            ->withErrors($validator)
            ->withInput();
    }

    return $next($request);
}
