<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\userprofile;

class UserController extends Controller
{
    public function mainPage()
    {
        return "mainPage";
    }

    //首頁
    public function homePage()
    {
        return "Homepage";
    }

    public function test()
    {
        $name = "2323";
        return view('pages\userprofile', ['name'  => $name]);
    }
}

