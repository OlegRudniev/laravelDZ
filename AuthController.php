<?php
use Socialite;

public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleFacebookCallback()
{
    try {
        $user = Socialite::driver('facebook')->user();
        // Обработай информацию о пользователе
    } catch (\Exception $e) {
        return redirect('/')->with('error', 'Произошла ошибка при авторизации через Facebook');
    }

    // Выполни необходимые действия с полученными данными.

    return redirect('/')->with('success', 'Вы успешно авторизовались через Facebook');
}
