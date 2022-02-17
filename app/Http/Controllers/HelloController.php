<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\AccountService;
use Illuminate\Support\Facades\Log;

class HelloController extends Controller
{
   //
  public function index()
  {
      Log::info('hello called', ['test' => 'test1']);
      AccountService::hoge();
      return view('hello');
  }
}
