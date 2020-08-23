<?php

namespace App\Models;

use App\Core\App;

class User
{
    public $name, $email;
    private $password;
    public static function create($data)
    {
        return App::get('database')->insert('users', $data);
    }

    public static function all()
    {
        //dd('model');
        return App::get('database')->selectAll('users');
    }
    public static function check($credential)
    {

        return App::get('database')->query("select * from users where email='" . $credential['email'] . "' and password='" . $credential['password'] . "'");
    }
    public static function resetAttempt($email)
    {
        //dd($email);
        $existence = App::get('database')->select('users', 'email', $email['email']);
        if (empty($existence))
            $_SESSION['error']['message'] = 'Your email not found';
        else {
            $mailResponse = mail($email['email'], 'Reset Your Password', 'Hello There');
            dd($mailResponse);
            $_SESSION['success']['message'] = 'Password reset link sent to your email address';
        }
    }
}
