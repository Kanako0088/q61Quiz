<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function home()
  {
    return view('page.home');
  }
  public function before()
  {
    return view('page.beforeHome');
  }
  public function attention()
  {
    return view('page.attention');
  }
}
