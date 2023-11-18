@extends('template')

<link rel="stylesheet" href="{{url('css/contact.css')}}">

@section('title','Contact Me')
@section('main')
    <div class="contact">
        <h1>Contact <span class="colored">Me</span></h1>
        @if (session('flash'))
            <p style="margin-top: -30px; margin-bottom: 30px;">
                <span style="color: #42ee38;">{{session('flash')}}</span>
            </p>
        @endif
        <div class="contact-container">
            <div class="form">
                <h3>Send your message</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti possimus omnis, cumque ex fuga doloribus perspiciatis explicabo.</p>
                <form action="/contact" method="POST">
                    @csrf
                    <div>
                        <input type="text" name="name" placeholder="Your Name">
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <textarea name="message" cols="30" rows="10"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="options">
                <div class="opt-item">
                    <i class="fa-solid fa-phone"></i>
                    <div class="info">
                        <h5>Call Me</h5>
                        <p>+62 81319248294</p>
                    </div>
                </div>
                <div class="opt-item">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="info">
                        <h5>Email Us</h5>
                        <p>andikagusti129@gmail.com</p>
                    </div>
                </div>
                <div class="opt-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="info">
                        <h5>Address</h5>
                        <p>Bojongsari, Depok, Jawabarat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection