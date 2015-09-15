<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{{ csrf_token() }}}">

<title>
    @yield('title')
</title>

<!-- Latest compiled and minified CSS -->
{{ HTML::style('/css/bootstrap.min.css'); }}

<!-- Optional theme -->
{{ HTML::style('/css/bootstrap-theme.min.css'); }}
{{ HTML::style('/css/jquery-ui.css'); }}

<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

{{ HTML::style('/css/clean_blog.css'); }}
{{ HTML::style('/css/main.css'); }}
{{ HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'); }}

@yield('style')

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "42de3165-bc3d-4232-96ea-0b930e2a5d56", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>