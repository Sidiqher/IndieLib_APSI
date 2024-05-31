<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Auth ada fungsi menarik data

class UserController extends Controller
{
    public function dataUser(Request $request)
    {
        echo $request->user()->id."<br>";
        echo $request->user()->name."<br>";
        echo $request->user()->email."<br>";
        echo $request->user()->password."<br>";
    }
}

