<?php

namespace App\Http\Controllers;

use App\User;

class UserRegistrationLog extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        $response = compact('users');
        return view('user-uegistration-log', $response);
    }
}
