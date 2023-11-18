@extends('template')

<link rel="stylesheet" href="{{url('css/post.css')}}">

@section('title',$post->title)
@section('main')
    <div class="post">
        <h1>{{$post->title}}</h1>
        @if (session()->has('message'))
            <p class="message">{{session('message')}}</p>
        @endif
        <img src="/images/{{$post->img_path}}">
        <p>{{$post->description}}</p>
        @if (session()->has('loginID'))
            <a href="/blog/{{$post->slug}}/edit">Edit</a>
            <form action="/blog/{{$post->slug}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        @endif
    </div>
@endsection
