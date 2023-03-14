<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light shadow" id="nav">
        <!--start social section-->
        <!--end social section-->
        <div class="container">
            <a class="navbar-brand " href="#">
                <img id="logo" src="{{ asset('website/img/logo.png') }}" alt="logo" class="img-fluid" width="100" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active " href="{{ route('home') }}">الرئيسية<span
                            class="sr-only">(current)</span></a>
                    <a class="nav-link" href="{{route('our-services')}}">خدماتنا</a>
                    <a class="nav-link" href="{{route('my-works.index')}}">أعمالنا</a>
                    <a class="nav-link" href="{{ route('products.index') }}">منتجاتنا</a>
                    <a class="nav-link" href="{{route('blogs.index')}}">مدونتنا</a>
                    <a class="nav-link" href="{{route('about-us')}}">نبذه عنا</a>
                    <a class="nav-link" href="{{route('contact-us.index')}}">تواصل معنا</a>
                </div>
                <!--start social section-->
                <div class="upper_header">
                    <div class="links">
                        <div class="main-moon">
                            <img class="moon" src="{{ asset('website/img/moon.png') }}" alt="gf">
                        </div>

                        <!-- <a class="lang" href="en/index.php">En</a> -->
                        <a class="lang" href="en/indexd41d.html?">En</a>
                    </div>
                </div>
                <!--end social section-->
            </div>
        </div>
    </nav>
</div>
