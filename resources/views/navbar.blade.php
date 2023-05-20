<!-- Header -->
<header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation" data-spy="affix">
        <div class="container">
            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Name -->
                <div class="page-scroll site-logo">
                    <a href="#top">WIZ TECH</a>
                </div>

            </div><!-- /.navbar-header -->

            <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                <!-- Navigation -->
                <ul class="nav navbar-nav navbar-right">

                    <li class="page-scroll"><a href="#top">Home</a></li>
                    <li class="page-scroll"><a href="#intro">Intro</a></li>
                    <li class="page-scroll"><a href="#about">About</a></li>
                    <li class="page-scroll"><a href="#services">Services</a></li>
                    <li class="page-scroll"><a href="#team">Team</a></li>
                    <li class="page-scroll"><a href="#history">History</a></li>
                    <li class="page-scroll"><a href="#works">Works</a></li>
                    <li class="page-scroll"><a href="#contact">Contact</a></li>

                    @if(Auth::user())
                        <li class="page-scroll"><a href="#contact">{{ Auth::user()->name }}</a></li>
                    @endif

                </ul><!-- /.navbar-nav -->

            </div><!-- /.navbar-collapse -->
        </div>
    </nav><!-- /.primary-navigation -->
</header><!-- /#header -->
<!-- End Header -->
