<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Concert Lister</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="searchBar">
                {{ Form::open(array('action' => 'CalendarEventsController@index', 'method' => 'get')) }}

                    {{ Form::text('search', null, ['class' => 'form-control search', 'placeholder' => 'Search...']) }}

                {{ Form::close() }}
                </li>

                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/portfolio">Portfolio</a>
                </li>

                @if(Auth::check())
                    <li>
                        <a href="/calendarEvents/manage">Manage Listings</a>
                    </li>
                    <li>
                        <a href="/calendarEvents/create">Create a New Concert</a>
                    </li>
                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>