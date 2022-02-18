<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\AccountService;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
   //
  public function index(Request $request)
  {
      newrelic_add_custom_parameter("user", $request->input('user'));
      Log::info('welcome called by '.$request->input('user'), ['test' => 'test1']);
      AccountService::hoge();
    return view('welcome');
  }
}
