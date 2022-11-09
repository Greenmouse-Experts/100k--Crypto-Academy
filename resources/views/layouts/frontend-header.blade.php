<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="header">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1667483700/EProd%20Images/log_fltrgb.png" alt="EPROD">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-offcanvas-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="bi bi-x-square"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" class="routers">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" class="routers">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('courses')}}" class="nav-link {{ (request()->is('courses')) ? 'active' : '' }}" class="routers">
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="{{route('faq')}}" class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}" class="routers">
                                Faq
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Affliate</a>
                        </li> -->
                        <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" class="routers">
                            Contact Us
                            </a>
                        </li>
                    </ul>
                    <div class="nav-auth">
                        <a href="{{route('sign')}}" class="btn-login">Sign In</a>
                        <a href="signUp" class="btn-signup">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header