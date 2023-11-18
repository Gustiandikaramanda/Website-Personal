@extends('template')

<link rel="stylesheet" href="{{url('css/portfolio.css')}}">

@section('title','My Portfolio')
@section('main')
    <div class="portfolio">
        <h1>My <span class="colored">Portfolio</span></h1>
        <div class="portfolio-container">
            @foreach ($portfolioItems as $item)
                <a href="{{$item->item_url}}" class="portfolio-item">
                    <img src="/images/{{$item->img_path}}" alt="">
                    <div class="info">
                        <i class="fa-solid fa-expand"></i>
                        <p>{{$item->title}}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection