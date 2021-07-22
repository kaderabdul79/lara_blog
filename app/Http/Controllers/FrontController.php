<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        // $data = [];
        // $data['current_time'] = 22;
        // $data['links'] = [
        //     'Facebook' => 'https://www.facebook.com',
        //     'Github' => 'https://www.github.com',
        //     'Youtube' => 'https://www.youtube.com',
        //     'Google' => 'https://www.google.com',
        //     'Gmail' => 'https://www.gmail.com',$data
        // ];
        return view('master');
    }
    // public function showRegistrationForm(){
    //     $data = [];
    //     $data['current_time'] = 22;
    //     $data['links'] = [
    //         'Facebook' => 'https://www.facebook.com',
    //         'Github' => 'https://www.github.com',
    //         'Youtube' => 'https://www.youtube.com',
    //         'Google' => 'https://www.google.com',
    //         'Gmail' => 'https://www.gmail.com'
    //     ];
    //    return view('register',$data);
    //     //return "hi";
    // }
    // public function processRegistration(){
        
    // }
}
