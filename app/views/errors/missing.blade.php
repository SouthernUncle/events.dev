<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nope...</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/css/jquery-ui.css">

    
    @yield('style')

    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
        }
    </style>

    {{ HTML::style('/css/clean_blog.css'); }}
    
</head>
<body>

@include('layouts.nav')

{{-- {{ Post::randomImage() }} --}}
<header class="intro-header missing" style="background-image: url('/img/404.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading lower">
                    <h1>Nope...</h1>
                    <hr class="small">
                    <span class="subheading">This isn't a thing. Go somewhere else.</span>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>
