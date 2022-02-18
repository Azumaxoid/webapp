<?php
namespace App\Services;

use Illuminate\Support\Facades\Log;

class AccountService {
    public function hoge()
    {
        Log::info('hoge called', ['test' => 'test2']);

        sleep(1);
        for($i=0; $i<3; $i++) {
            Log::info('fuga calling', ['test' => 'test3']);
            self::fuga();
            Log::info('fuga finished', ['test' => 'test6']);
            echo "AccountService hoge";
        }
    }
    public function fuga()
    {
        Log::info('fuga called', ['test' => 'test4']);
        if (rand(0, 5) == 1) {
            Log::info('boooooooo', ['test' => 'test5']);
            sleep(10);
            $hoge = [];
            $hoge[1];
            throw new ErrorException('Error');
        }
        sleep(1);
    }
}
