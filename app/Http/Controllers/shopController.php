<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{

    public function index(){
        $social_media = [
            ['title' => 'Facebook', 'income' => '400 Milliard Dolar'],
            ['title' => 'Youtube', 'income' => '200 Milliard Dolar'],
            ['title' => 'Instagram', 'income' => '150 Milliard Dolar']
        ];
    
        $name=request("first_name");
        $password=request("pwd");
        return view('home', ['social_media' => $social_media,'name'=>$name,'password'=>$password]);
    }

    public function show($city_name,$shop_assistant,$list_id){
        return view('shopper',compact('city_name','shop_assistant','list_id'));
    }
}
