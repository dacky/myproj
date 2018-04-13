<?php
namespace App\Http\Controllers;

use Cookie;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller{

    public function index()
    {
    	// session(['key' => 'value']);
    	// session(['age' => 25]);
    	// $Browser = $_SERVER['HTTP_USER_AGENT'];  
        Cookie::queue('test', 'Hello, laravel', 1);
         $cookie = request()->cookie('test');
         // $session = session('key');
         print_r($cookie);
         // print_r($session);
    }
    public function getCookie()
    {
    	$cookie = request()->cookie();
         print_r($cookie);
    }
    public function setRedis()
    {
    	Redis::set('name','dacky');
    	$a = Redis::get('name');
    	print_r($a);
    }
    public function getMac()
    {
    	request()->session()->regenerate();
    	// Redis::set('name','dacky');
    	$v = request()->session()->all();
    	print_r($v);
    }

    public function getSession()
    {
    	$v = request()->session()->all();
    	print_r($v);
    }

    public function filter()
    {
    	$a = "1231<scriddsaapt>2341234aaaaa<script type='text/javascript'>1233</script>";

    	print_r($a);
    }









 }
