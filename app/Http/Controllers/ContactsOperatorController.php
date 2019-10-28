<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactsOperatorController extends Controller
{
    public function show(){
    	$contacts = DB::table('contacts')->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function create(){
    	return view('create');
    }

    public function createContact(Request $request){
    	$result=DB::insert('insert into contacts (email,phone, name,surname,fname,organization_name) values(?,?,?,?,?,?)', [$_POST['email'],$_POST['phone'],$_POST['name'],$_POST['surname'],$_POST['fname'],$_POST['organization']]);
    	return view('create');

    }

    public function contactShow($id){
    	echo "Методо функцианирует contactShow</br>";
    	print_r($_POST);
    }

    public function contactDelete($id){
    	echo "Методо функцианирует contactDelete</br>";
    	print_r($_POST);
    }

    public function contactEdit($id){
    	echo "Методо функцианирует ContactEdit</br>";
    	print_r($_POST);
    }

}
