<header>
    <!-- Alert Section -->
    <div class="alert alert-info alert-dismissible fade show text-center mb-0">
        This test project has been implemented using PHP 7.2.18 and Laravel 6.x for Ipera Solutions by Naser Sadeghi.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <!-- End of Alert Section -->
    
    <!-- Top Menu Section -->
    <nav class="navbar navbar-expand-md bg-white navbar-light shadow">
        

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav pd-0" id="mainMenu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('companies')}}"><i class="far fa-building"></i> Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('employees')}}"><i class="fas fa-users"></i> Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}"><i class="fa fa-info-circle"></i> About</a>
                </li>
                @if(!auth::guest() && Auth::user()->role == 1)
                    <li class="nav-item">
                        <a class="nav-link btn" href="{{route('back.index')}}" title="controlPanel" target="_blank"><i class="fas fa-desktop"></i>	Control Panel</a>
                    </li>
                @endif
            </ul>
            <form class="ml-auto form-inline nav-link">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search ...">
                <div class="input-group-append">
                    <button class="btn btn-info" type="submit" title="search"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </form>
            
            <ul class="navbar-nav">
                
                @if(!auth::guest())
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link" title="Login"><i class="fas fa-sign-in-alt text-info"></i> </a>
                    </li>
                @endif
                
                
        </ul>
        </div>
    </nav>
    <!-- End of Top Menu Section -->
</header>