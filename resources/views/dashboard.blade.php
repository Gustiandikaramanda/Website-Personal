@extends('template')

<link rel="stylesheet" href="{{url('css/dashboard.css')}}">

@section('title','Dashboard')
@section('main')
    <div class="dashboard">
        <a href="logout" class="logout">Logout</a>
        <div class="portfolio-add">
            <h2><span class="colored">##</span> Add new item to your <span class="colored">portfolio</span></h2>
            <form action="/portfolio" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Enter The title">
                <input type="text" name="item_url" placeholder="Enter The url">
                <input type="file" name="img">
                <input type="submit" value="Add">
            </form>
            
        </div>
        <div class="posts-add">
            <h2><span class="colored">##</span> Add new post to your <span class="colored">blog</span></h2>
            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Enter The title">
                <input type="text" name="categories" placeholder="Enter The categories">
                <textarea name="content" rows="10" placeholder="Write the content here"></textarea>
                <input type="file" name="img">
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
@endsection

@section('addedScripts')
    <script src="{{url('js/dashboard.js')}}"></script>
@endsection

