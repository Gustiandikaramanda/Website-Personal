@extends('template')

<link rel="stylesheet" href="{{url('css/blog.css')}}">

@section('title','My Blog')
@section('main')
    <div class="blog">
        <h1>Blog</h1>
        <div class="posts-container">
            @foreach ($posts as $post)
                <a href="/blog/{{$post->slug}}" class="post-item">
                    <div class="img-container">
                        <img src="/images/{{$post->img_path}}" alt="">
                    </div>
                    <div class="info">
                        <div class="container">
                            <div class="categories">
                                @foreach (Str::of($post->categories)->explode(',') as $item)
                                    <span>{{$item}}</span>
                                @endforeach
                            </div>
                            <div class="date">On : {{date('d-m-Y',strtotime($post->updated_at))}}</div>
                        </div>
                        <h3>{{$post->title}}</h3>
                        <p>{{substr($post->description, 0, 100)}} ...</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection