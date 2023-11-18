<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="" rel="icon" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/login.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Login</h1>
        <form action="/loginAdmin" method="POST">
            @if (Session()->has('success'))
                <span class="success-span"> {{Session('success')}}</span>
            @endif
            @if (Session()->has('fail'))
                <span class="error-span"> {{Session('fail')}}</span>
            @endif
            @csrf
            <input type="text" name="username" placeholder="Username" value="{{old('username')}}">
            <span class="error-span">@error('username') {{$message}}@enderror</span>
            <input type="password" name="password" placeholder="Password">
            <span class="error-span">@error('password') {{$message}}@enderror</span>
            <input type="submit" value="Enter">
        </form>
    </body>
</html>