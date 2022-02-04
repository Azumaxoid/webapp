<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\AccountService;

class HelloController extends Controller
{
   //
  public function index()
  {
    AccountService::hoge();
    return view('hello');
  }
}
