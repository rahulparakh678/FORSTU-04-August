<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
                <li class="nav-item">
                    
                    
                    <a href="{{ route('students.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-tachometer-alt">

                        </i>

                        {{ trans('global.dashboard') }}
                    </a>
                </li>
           
                <li class="nav-item">
                    <a href="{{ route('createprofile') }} " class="nav-link ">
                        <i class="fa-fw fas fa-user-circle nav-icon">

                        </i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('documents') }} " class="nav-link ">
                        <i class="fa-fw fas fa-folder-open nav-icon">

                        </i>
                        Documents
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('sfc') }} " class="nav-link ">
                        <i class="fa-fw fas fa fa-universal-access nav-icon">

                        </i>
                        Our Plans
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('allscholarships') }}" class="nav-link ">
                       

                       <i class="fa fa-graduation-cap nav-icon" ></i>
                        All Scholarships
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('myscholarship') }} " class="nav-link ">
                        <i class="fa-fw fas fa-search nav-icon">

                        </i>
                        Active Scholarships
                    </a>
                </li>
                
                 <li class="nav-item">
                    <a href="{{route('appliedscholarship')}} " class="nav-link ">
                        <i class="fa-fw fas fa-check-circle nav-icon">

                        </i>
                        Applied Scholarships
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('support')}} " class="nav-link ">
                        <i class="fa-fw fas fa-headset nav-icon">

                        </i>
                        Support
                    </a>
                </li>
                
            
            
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('password.request') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
            <li class="nav-item">
                <hr>
                <a>
               <center>{{Auth::user()->name}}</center>
                </a>
                <hr>
            </li>
    
        </ul>

    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>