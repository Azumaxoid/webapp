<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\AccountService;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
   //
  public function index()
  {

      Log::info('welcome called', ['test' => 'test1']);
      AccountService::hoge();
    return view('hello');
  }
}
