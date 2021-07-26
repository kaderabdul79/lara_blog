@extends('master')

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <h2>Welcome, {{ $email }}</h2>
</div>
<div class="col-md-6 align-center">
    <div>
        <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('categories.index') }}">Category</a></button>
        <button type="button" class="btn btn-outline-primary" class="text-dark"><a href="{{ route('posts.index') }}">All Post</a></button>
    </div>
</div>