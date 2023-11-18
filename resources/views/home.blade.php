@extends('template')

<link rel="stylesheet" href="{{url('css/home.css')}}">

@section('title','Home')
@section('main')
    <div class="home">
        <p class="hello">Hello I'm</p>
        <h1 style="text-align: start">GUSTIANDIKA RAMANDA</h1>
        <p class="wk">Desainer Grafis</p>
        <p class="quote">“The more I deal with the work as something that is my own, as something that is personal, the more successful it is.”</p>
        <div>Follow Me : 
            <span>
                <a href="https://wa.me/+6285694453351"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/gusti_134/?hl=en"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="https://github.com/Gustiandikaramanda"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/gustiandika/"><i class="fa-brands fa-linkedin"></i></a>
            </span>
        </div>
    </div>
@endsection