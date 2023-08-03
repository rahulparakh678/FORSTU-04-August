<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('providers.home') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
           
            <li class="nav-item">
                    <a href="{{ route('setup') }}" class="nav-link ">
                        <i class="fa-fw fas fa-graduation-cap nav-icon">

                        </i>
                       Launch Scholarship Programme
                    </a>
            </li>
            <li class="nav-item">
                    <a href="{{route('promotion')}}" class="nav-link ">
                        <i class="fa  fa-users nav-icon">

                        </i>
                        Scholarship Promotion
                    </a>
            </li>
            <li class="nav-item">
                    <a href="{{ route('listscheme') }}" class="nav-link ">
                        <i class="fa  fa-users nav-icon">

                        </i>
                       Manage Applications
                    </a>
            </li>
            
            
            
            
                
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('password.request') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                
            
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>