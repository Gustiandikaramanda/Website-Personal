@extends('template')

<link rel="stylesheet" href="{{url('css/post_edit.css')}}">

@section('title','Edit '. $post->title)
@section('main')
    <div class="post_edit">
        <a href="logout" class="logout">Logout</a>
        <div class="post-edit">
            <h2><span class="colored">##</span> Edit " {{$post->title}} " post</h2>
            <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="title" value="{{$post->title}}">
                <input type="text" name="categories" value="{{$post->categories}}">
                <textarea name="content" rows="10">{{$post->description}}</textarea>
                <input type="file" name="img">
                <input type="submit" value="Edit">
            </form>
        </div>
    </div>
@endsection

@section('addedScripts')
    <script src="{{url('js/dashboard.js')}}"></script>
@endsection

