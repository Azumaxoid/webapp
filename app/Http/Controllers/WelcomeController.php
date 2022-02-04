<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\AccountService;

class WelcomeController extends Controller
{
   //
  public function index()
  {
    AccountService::hoge();
    return view('hello');
  }
}
