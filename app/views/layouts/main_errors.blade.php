<div class="container main">
    @if($errors->has())
        <div class="row alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{{ $error }}}</li>
            @endforeach
        </div>
    @endif

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @yield('content')
</div>