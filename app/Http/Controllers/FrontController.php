<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function getReset()
    {
        return view('auth.reset-password');
    }

    public function getVoterLogin()
    {
        return view('voter.login');
    }

    public function getCustom1()
    {
        return view('vote-pages.custom1');
    }
}
