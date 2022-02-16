<?php
namespace App\Services;

class AccountService {
    public function hoge()
    {
        sleep(1);
        for($i=0; $i<5; $i++) {
            self::fuga();
            echo "AccountService hoge";
        }
    }
    public function fuga()
    {

        if (rand(0, 5) == 1) {
            $hoge = [];
b            $hoge[1];
            throw new ErrorException('Error');
        }
        sleep(1);
    }
}
