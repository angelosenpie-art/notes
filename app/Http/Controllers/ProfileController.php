<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
// MIDDLE WARE 2nd OPTION, FIRST OPTION IS IN THE WEB ROUTE
// THIS FUNCTION (PAGE) CAN BE SEEN BY AUTH USER ONLY
/*     public function __contruct()
    {
        $this->middleware(['auth']);
    } */
    public function index()
    {
        return view('profile');
    }
}
