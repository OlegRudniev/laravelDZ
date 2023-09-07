<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class AuthController extends Controller
{
    // Метод для перенаправления на страницу авторизации Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Метод для обработки коллбэка после авторизации на Facebook
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Произошла ошибка при авторизации через Facebook');
        }

       
        return redirect('/')->with('success', 'Вы успешно авторизовались через Facebook');
    }
}
