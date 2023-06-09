<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mangosteen\Models\Entities\User;

class HomeController extends Controller
{
    //
    public function __invoke(){
        dd(User::all());
    }
}
