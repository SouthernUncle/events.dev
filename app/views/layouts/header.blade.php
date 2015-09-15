<header class="intro-header" style="background-image: url(@yield('image_url'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading" id="forceUp">

                    <h1>
                        @yield('heading')
                    </h1>

                    <hr class="small">

                    <span class="subheading">
                        @yield('subheading')
                    </span>
                    
                </div>
            </div>
        </div>
    </div>
    @yield('credit')
</header>