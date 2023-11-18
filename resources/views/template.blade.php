<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="" rel="icon" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/template.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav>
            <a href="/"><i class="fa-solid fa-house"></i>Home</a>
            <a href="/about"><i class="fa-solid fa-user"></i> About</a>
            <a href="/portfolio"><i class="fa-solid fa-briefcase"></i>Portfolio</a>
            <a href="/blog"><i class="fa-brands fa-blogger-b"></i>Blog</a>
            <a href="/contact"><i class="fa-solid fa-address-book"></i>Contact</a>
            <div>The design is <span>inspired by another one</span>, and developed by <br><span>GUSTIANDIKA</span> © {{Date('Y')}}</div>
        </nav>
        <main>
            <div class="menuBtn"><i class="fa-solid fa-bars"></i></div>
            @yield('main')
        </main>
        @yield('addedScripts')
        <script src="{{url('js/template.js')}}"></script>
    </body>
</html>