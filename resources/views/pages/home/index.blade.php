@extends('layouts.front')

@section('content')

<div class="main-wrapper">
    <section class="blog-list px-5 py-5 p-md-5">
        <div class="container">
            @foreach ($data as $result)
                <div class="item mb-3">
                    <div class="card">
                        <div class="card-body">         
                            <div class="media">
                                <a href="">
                                    <img class="mr-4 img-fluid post-thumb d-none d-md-flex" src="{{ $result->image }}" alt="image">
                                </a>
                                <div class="media-body">
                                    <h3 class="title mb-1">
                                        <a href="blog-post.html">{{ $result->title }}</a>
                                    </h3>
                                    <div class="meta mb-1">
                                        <span class="date">Published {{ $result->created_at->diffForHumans() }}</span>
                                        <span class="time">5 min read</span>
                                        <span class="comment">
                                            <a href="#"><strong>{{ $result->users->name }}</strong></a>
                                        </span>
                                    </div>
                                    <div class="intro">{{ substr(strip_tags($result->content), 0, 200) }}...</div>
                                    <a class="more-link" href="blog-post.html">Read more &rarr;</a>
                                </div><!--//media-body-->
                            </div><!--//media-->
                        </div>
                    </div>
                </div><!--//item-->
            @endforeach
        </div>
    </section>

</div><!--//main-wrapper-->
    
@endsection