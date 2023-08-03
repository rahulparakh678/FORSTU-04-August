<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>


                         @can('profile_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                       Profiles
                    </a>
                
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("paidplanstudents") }}" class="nav-link {{ request()->is('admin/scholarships') || request()->is('admin/scholarships/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                                Paid Students Profiles
                            </a>

                        </li>
                        
                    </ul>
                </li>
            @endcan













            @can('profile_access')
                <li class="nav-item">
                    <a href="{{ route("admin.profiles.index") }}" class="nav-link {{ request()->is('admin/profiles') || request()->is('admin/profiles/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        {{ trans('cruds.profile.title') }}
                    </a>
                </li>
            @endcan
            @can('profile_access')
                <li class="nav-item">
                    <a href="{{ route("demotable") }}" class="nav-link {{ request()->is('admin/profiles') || request()->is('admin/profiles/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user nav-icon">

                        </i>
                        Demo Access
                    </a>
                </li>
            @endcan
            @can('profile_access')
                <li class="nav-item">
                    <a href="{{ route("notifications") }}" class="nav-link {{ request()->is('admin/profiles') || request()->is('admin/profiles/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-bell nav-icon">

                        </i>
                        Notifications
                    </a>
                </li>
            @endcan
            @can('sfc_payment_access')
                <li class="nav-item">
                    <a href="{{route('sfcpayments')}}" class="nav-link ">
                        <i class="fa-fw fas fa-credit-card nav-icon">

                        </i>
                        SFC Payments
                    </a>
                </li>
            @endcan
            @can('sfc_payment_access')
                <li class="nav-item">
                    <a href="{{route('studenpartnerindex') }}" class="nav-link">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                        Student Partners
                    </a>
                </li>
            @endcan

            @can('sfc_project_access')
                <li class="nav-item">
                    <a href="{{ route('sfcprojectsindex') }}" class="nav-link">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                        SFC Scholarship Projects
                    </a>
                </li>
            @endcan
            @can('scholarship_provider_access')
                <li class="nav-item">
                    <a href="{{ route("admin.scholarship-providers.index") }}" class="nav-link {{ request()->is('admin/scholarship-providers') || request()->is('admin/scholarship-providers/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-address-card nav-icon">

                        </i>
                        {{ trans('cruds.scholarshipProvider.title') }}
                    </a>
                </li>
            @endcan
            @can('enquiry_access')
                <li class="nav-item">
                    <a href="{{route('enquiryform')}}" class="nav-link">
                        <i class="fa fa-paper-plane nav-icon">

                        </i>
                        Enquiry form
                    </a>
                </li>
            @endcan
            @can('scholarship_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                        Scholarships Manager
                    </a>
                
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.scholarships.index") }}" class="nav-link {{ request()->is('admin/scholarships') || request()->is('admin/scholarships/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                                {{ trans('cruds.scholarship.title') }}
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route("scholarshipfeed") }}" class="nav-link ">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                            Scholarships Feeds
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('scholarship_achiever_access')
            <li class="nav-item">
                <a href="{{ route("admin.scholarship-achievers.index") }}" class="nav-link {{ request()->is('admin/scholarship-achievers') || request()->is('admin/scholarship-achievers/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-trophy nav-icon">

                    </i>
                    {{ trans('cruds.scholarshipAchiever.title') }}
                </a>
            </li>
            @endcan
            @can('profile_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                        Reports
                    </a>
                
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("profilesexport") }}" class="nav-link">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                                Student Profiles Report
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route("usersexport") }}" class="nav-link ">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                            User Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("profileimport") }}" class="nav-link ">
                                <i class="fa-fw fas fa-graduation-cap nav-icon">

                                </i>
                            Import Student Profiles
                            </a>
                        </li>
                    </ul>
                </li>
            @endcan
            @can('master_data_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-server nav-icon">

                        </i>
                        {{ trans('cruds.masterData.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('caste_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.castes.index") }}" class="nav-link {{ request()->is('admin/castes') || request()->is('admin/castes/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.caste.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('coursetype_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.coursetypes.index") }}" class="nav-link {{ request()->is('admin/coursetypes') || request()->is('admin/coursetypes/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.coursetype.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('course_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.courses.index") }}" class="nav-link {{ request()->is('admin/courses') || request()->is('admin/courses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.course.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('course_access')
                            <li class="nav-item">
                                <a href="{{route('student_courses')}}" class="nav-link">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    Student Courses
                                </a>
                            </li>
                        @endcan
                        @can('category_access')
                            <li class="nav-item">
                                <a href="{{ route("documents.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    Documents
                                </a>
                            </li>
                        @endcan
                        @can('category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    {{ trans('cruds.category.title') }}
                                </a>
                            </li>
                        @endcan
                                <li class="nav-item">
                                <a href="{{route('home.collegesociety')}}" class="nav-link">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    College Trust
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="{{route('home.college')}}"class="nav-link">
                                    <i class="fa-fw fas fa-tags nav-icon">

                                    </i>
                                    College
                                </a>
                                </li>
                    </ul>
                </li>
            @endcan
            @can('support_access')
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-headset nav-icon">

                    </i>
                    {{ trans('cruds.support.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    @can('ticketcategory_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.ticketcategories.index") }}" class="nav-link {{ request()->is('admin/ticketcategories') || request()->is('admin/ticketcategories/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i>
                                {{ trans('cruds.ticketcategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('ticket_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.tickets.index") }}" class="nav-link {{ request()->is('admin/tickets') || request()->is('admin/tickets/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-envelope-open nav-icon">

                                </i>
                                {{ trans('cruds.ticket.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            @endcan
            @can('faq_management_access')
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question nav-icon">

                    </i>
                    {{ trans('cruds.faqManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    @can('faq_category_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.faqCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_question_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-question nav-icon">

                                </i>
                                {{ trans('cruds.faqQuestion.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
            
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('password.request') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
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
