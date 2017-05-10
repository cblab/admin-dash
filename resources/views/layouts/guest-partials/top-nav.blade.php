<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @if(! Auth::check())

                <a class="navbar-brand logo-size" href="/"><b>Investor Dash</b></a>

            @else

            <a class="navbar-brand logo-size" href="/home"><b>Investor Dash</b></a>

            @endif

        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">

                @if(! Auth::check())

                <li><a href="/register" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="/auth/facebook"><i class="fa fa-facebook"></i></a></li>


                @endif

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>