<!-- Navigation-->
{{-- <div class="news-container">
        <div class="title">
            Announcement
        </div>

        <ul>
        @foreach ($sliders as $sliderItem)
            <li>
                {{$sliderItem->title}}
            </li>
        @endforeach
        </ul>
</div>
<br>
<br> --}}
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/portfolio/Mariane_s_FINAL_LOGO-removebg-preview (1).png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Announcement">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#About">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Vision and Mission">Vision & Mission</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Pastries</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Cakes">Cakes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-primary" href="{{ url('/login') }}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>