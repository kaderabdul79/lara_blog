<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = [];
        $data['site_title'] = "Practice Blog Site";
        $data['current_time'] = '23-07-22';
        $data['links'] = [
            'Facebook' => 'https://www.facebook.com',
            'Github' => 'https://www.github.com',
            'Youtube' => 'https://www.youtube.com',
            'Google' => 'https://www.google.com',
            'Gmail' => 'https://www.gmail.com'
        ];
        return view('index', $data);
    }
     public function post(){
        $data = [];
         $data['site_title'] = "Practice Blog Site";
        $data['current_time'] = '23-07-22';
        $data['links'] = [
            'Facebook' => 'https://www.facebook.com',
            'Github' => 'https://www.github.com',
            'Youtube' => 'https://www.youtube.com',
            'Google' => 'https://www.google.com',
            'Gmail' => 'https://www.gmail.com'
        ];
        $data['post'] = [
            'title' => 'Sample blog post',
            'created_at' => 'January 1, 2021',
            'description' => 'Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.'
        ];
        return view('post', $data);
    }
    public function showRegistrationForm(){
        $data = [];
        $data['current_time'] = 22;
         $data['site_title'] = "Practice Blog Site";
        $data['links'] = [
            'Facebook' => 'https://www.facebook.com',
            'Github' => 'https://www.github.com',
            'Youtube' => 'https://www.youtube.com',
            'Google' => 'https://www.google.com',
            'Gmail' => 'https://www.gmail.com'
        ];
       return view('register',$data);
       
    }
    public function processRegistration(){
        return "thnq";
    }
}
