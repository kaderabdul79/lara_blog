@extends('master')

@section('maincontent')
{{-- @include('layout.maincontent') --}}
<div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">{{ $post['title'] }}</h2>
        <p class="blog-post-meta">{{ $post['created_at'] }}<a href="#">Mark</a></p>
            {{ $post['description'] }}
        
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div>
@endsection  