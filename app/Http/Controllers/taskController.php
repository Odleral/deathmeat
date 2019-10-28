<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class taskController extends Controller
{
    public function add(){
    	$contacts = DB::table('contacts')->get();
    	$products = DB::table('product_type')->get();
        return view('taskadd', ['contacts' => $contacts, 'products'=> $products]);
    }

    public function messageAdd(){
    	$contactName = DB::table('contacts')->where("id", $_POST["contact_id"])->value("name");
    	$contactSurname = DB::table('contacts')->where("id", $_POST["contact_id"])->value("surname");
    	$contactPhone = DB::table('contacts')->where("id", $_POST["contact_id"])->value("phone");
        $products = DB::table('product_type')->get();
        //print_r($_POST);
        $subject = $_POST["subject"];
    	$summury = 0.0;
        if($subject=="покупатель"){
            $message = "Уважаемый ".$contactName.", ваш заказ готов.\n";
            for($i = 1; $i <= 10; $i++){
            if(isset($_POST["defaultCheck".$i]))
                if($_POST["defaultCheck".$i] == "on"){
                    $productValue = DB::table('product_type')->where("name", $_POST["name".$i])->value("value");
                    $productPrice = DB::table('product_type')->where("name", $_POST["name".$i])->value("price");
                    $message .= $i.". ".$_POST["name".$i]." ".$_POST["number".$i]." ".$productValue."-".((float)$productPrice * (float)$_POST["number".$i])." сум.\n";
                    $summury += (float)$productPrice * (float)$_POST["number".$i];
                }

            }
            $message .="Итого ".$summury." сум."."\n";    
        }elseif($subject=="поставщик"){
                        $message = "Уважаемый ".$contactName.", прошу Вас предоставить мне нижеследующий список товаров и продуктов.\n";
                        for($i = 1; $i <= 10; $i++){
                            if(isset($_POST["defaultCheck".$i]))
                                if($_POST["defaultCheck".$i] == "on"){
                                        $message .= $i.". ".$_POST["name".$i]." ".$_POST["number".$i]." "."\n";
                }
        }
    }
		$message .= "С уважением Миркаримов Камрон, заведующий мясным складом ресторана Qanotchi.\nТел: +998974323397\n";
		return view('messageVerification', ['message' => $message, 'POST'=>$_POST, 'contactPhone' => $contactPhone]);
    }

    public function messageSeed(){
    	$contactPhone = DB::table('contacts')->where("id", $_POST["contactId"])->value("phone");
        DB::table('tasks')->insert([
    		['contact_id' => $_POST['contactId'], 'message' => $_POST['message'], 'task_create' => date('Y-m-d h:i:s'), 'phone'=>$contactPhone]
    	]);
    	return redirect()->route('tasks');
    }

    public function show(){
    	$contacts = DB::table('contacts')->get();
    	$tasks = DB::table('tasks')->orderBy('task_create')->get();
    	return view('tasks', ['tasks' => $tasks, 'contacts' => $contacts]);
    }

    public function check($email, $password){
    	$user = DB::table('users')->where('email',$email)->first();
    	if($user->password == $password){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function order(){
    	$orders = DB::table('tasks')->where('is_delivered', false)->get();
    	$messages = json_encode($orders, JSON_UNESCAPED_UNICODE);
    	return '{"tasks":'.$messages.'}';
    }

    public function updateTask(){
        $tasks = DB::table('tasks')->where('is_delivered', false)->get();
        foreach ($tasks as $task) {
            DB::table('tasks')->where('id', $task->id)->update(['is_delivered' => true]);
        }
        $arr = ["status"=>"done", "primary"=>"secondary"];
        $json = json_encode($arr, JSON_UNESCAPED_UNICODE);
        return "{main:".$json."}";
    }

    public function updateTest(){
        $tasks = DB::table('tasks')->where('is_delivered', true)->get();
        foreach ($tasks as $task) {
            DB::table('tasks')->where('id', $task->id)->update(['is_delivered' => false]);
        }
    }

    public function tasksCount(){
        $delivered = DB::table('tasks')->where('is_delivered', true)->count();
        $tasksWait = DB::table('tasks')->where('is_delivered', false)->count();
        $arr = ["delivered" => $delivered, "tasksWait" => $tasksWait];
        $json = json_encode($arr, JSON_UNESCAPED_UNICODE);
        return "{main:".$json."}";
    }
}
