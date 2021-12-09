<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'User Profil'
        ]);
    }

    public function setting()
    {
        return view('user.setting', [
            'title' => 'Setting Profil'
        ]);
    }
}
