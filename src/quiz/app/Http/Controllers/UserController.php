<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function home(Request $request)
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
  public function inputname(Request $request)
  {
    $name = $request->name;
    setcookie("yourName", $name, time() + 180);
    return redirect(route('home'));
  }
  public function name(Request $request)
  {
    return view('page.name');
  }
}
