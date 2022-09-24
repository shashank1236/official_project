<head>
    @include("include.global_css")
</head>

<header>
    <nav class="navbar navbar-light bg-light" id="top-nav">
        <div class="container-fluid gp-container-fluid">
            <a class="navbar-brand" href="#">
                <div class="gp-logo-div">
                    <div class="gp-logo">
                        <img class="gp-logo-img" src="{{ asset('images/logo.png') }}" alt="">
                    </div>
                    <div class="gp-logo-text">
                        <div>Gyan Bharti</div> <div>public school</div>
                    </div>
                </div>
            </a>
            <div class="gp-inner-nav">
                <div class="gp-inner-nav-top d-flex">
                    <div class="nav-link" aria-current="page" href="#">
                        <div class="d-flex">
                            <div class="link-icon"><i class="fa-solid fa-phone"></i></div> 
                            PHONE NUMBER <br>
                            +91 9877844744
                        </div>
                    </div>
                    <div class="nav-link" aria-current="page" href="#">
                        <div class="d-flex">
                            <div class="link-icon"><i class="fa-solid fa-envelope"></i></div>
                            E-MAIL ADDRESS <br>
                            gyanpublicschool@gmail.com
                        </div>
                    </div>
                    <div class="nav-link" aria-current="page" href="#">
                        <div class="d-flex">
                            <div class="link-icon"><i class="fa-solid fa-location-dot"></i></div>
                            LOCATION <br>
                            Bargon Rd, Badgon, Gorakhpur, Uttar Pradesh 273010
                        </div>
                    </div>
                </div>

                <div class="gp-topnav-second">
                    <div class="d-flex">
                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 1</a>
                        </div>

                        <div class="gp-topnav-link gp-dropdown">
                            <a class="nav-link" href="#">Link 2</a>
                            <div class="dropdown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 3</a>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 4</a>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 1</a>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 2</a>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 3</a>
                        </div>

                        <div class="gp-topnav-link">
                            <a class="nav-link" href="#">Link 4</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <span class="navbar-toggler-icon"></span> -->
        </div>
    </nav>
    <nav id="slide-nav" class="navbar navbar-light bg-light slide-nav">
        
    </nav>
</header>