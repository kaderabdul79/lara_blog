<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
class CategoryController extends Controller
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
        // $data['categories'] = Categorie::all();
        $data['categories'] = Categorie::Simplepaginate(1);
        return view('category.index', $data);
    }
    
    // public function (){
    //     return ;
    // }
}
