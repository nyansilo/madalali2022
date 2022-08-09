<div class="col-md-4">
    <div class="sidebar left">

        <div class="my-account-nav-container">

            <ul class="my-account-nav">
                <li class="sub-nav-title">Manage Account</li>
                <li><a href="{{ route('home') }}" class="current"><i class="sl sl-icon-user"></i> My Profile</a></li>
                <li><a href=""><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
            </ul>

            <ul class="my-account-nav">
                <li class="sub-nav-title">Manage Listings</li>
                <li><a href=""><i class="sl sl-icon-docs"></i> My Properties</a></li>
                <li><a href=""><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
            </ul>

            <ul class="my-account-nav">
                <li><a href="change-password.html"><i class="sl sl-icon-lock"></i> Change Password</a></li>
                <li><a href="{{ route('logout') }}""><i class="sl sl-icon-power"></i> Log Out</a></li>

                <li >
                              

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            </ul>



        </div>

    </div>
</div>