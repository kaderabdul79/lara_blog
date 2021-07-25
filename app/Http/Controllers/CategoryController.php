<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Str;


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
        $data['categories'] = Categorie::Simplepaginate(5);
        return view('category.index', $data);
    }
    public function create(){
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
        return view('category.create', $data);
    }
    public function store(Request $req){
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
        // $name = $req->name;  $status = $req->status;
        Categorie::create([
            'name' => trim($req->name),
            'slug' => Str::slug(trim($req->name)),
            'status' => $req->status
        ]);
        //return view('category.create', $data);
        return redirect('categories')->with(['data'=> $data]);
    }
    public function show($id){
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
        $data['category'] = Categorie::find($id);
        return view('category.show', $data);
        //return redirect('categories')->with(['data'=> $data]);
    }
    public function edit($id){
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
        $data['category'] = Categorie::find($id);
        return view('category.edit', $data);
        
    }
    public function update($id,Request $req){
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
        $category = Categorie::find($id);
        $category->update([
            'name' => trim($req->name),
            'slug' => Str::slug(trim($req->name)),
            'status' => $req->status
        ]);
         return redirect('categories')->with(['data'=> $data]);
    }
    
    public function delete($id){
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
        //$category = Categorie::find($id);
        $category = Categorie::findOrFail($id);
        $category->delete();
        $data['categories'] = Categorie::Simplepaginate(5);
        return view('category.index', $data);
    }
}
