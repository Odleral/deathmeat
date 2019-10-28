<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class authController extends Controller
{
    public function auth(){
        
        if(isset($_POST['login_submit'])){
            $user = DB::table('users')->where('email', $_POST['mail'])->value('password');
            if($user == $_POST['password']){
                setcookie('IS_KAMRON?', 'YES', time()+7200);
                return view('welcome');
            }    
        }
    }
}