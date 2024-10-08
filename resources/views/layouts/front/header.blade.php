<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="height: 60px;">
    <div class="container justify-content-between">
        <div id="myTopnav">
            <a href="/">
                <img id="logimg" src="{{ asset('images/LogoProk.svg') }}" alt='Tunisia Trip'>
            </a>
        </div>

        <button class="navbar-toggler ml-auto" type="button" id="toggleButton" aria-label="Toggle navigation"
            onclick="toggleNavbarBackground()">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center li1" id="tun-time">
                    <img src="{{ asset('images/Flag_of_Tunisia.svg') }}" class="mr-1" id='crcltuns' alt="Tunisia">
                    <span class="nav-link" href="#" id="tunis-time"></span>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id='home' href="/"> 홈</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id='aboute' href="/about-tunisia">튀니지</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id="aboutatlnts" href="/about-atlantis">아틀란티스</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id="travel" href="/travel-information">여행정보</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id='sub' href="/trip-itinerary">추천일정</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id='blog' href="/blog-page">뉴스레터</a>
                </li>
                <li class="nav-item d-flex align-items-center txtnav">
                    <a class="nav-link" id='part' href="/partners">파트너</a>
                </li>
{{--                <li class="nav-item active d-flex align-items-center  txtnav">--}}
{{--                    <div class="dropdown">--}}
{{--                        <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"--}}
{{--                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            보다 더--}}
{{--                        </button>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                            <a class="dropdown-item" id='sub' href="/trip-itinerary">추천일정</a>--}}
{{--                            <a class="dropdown-item" id='blog' href="/blog-page">뉴스레터</a>--}}
{{--                            <a class="dropdown-item" id='part' href="/partners">파트너</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class=" nav-item mr-0 d-flex" id="tun-time">
                    <button type="button" class="btn btn-outline-primary  btn-main mr-2">문의하기</button>
                    <div class="position-relative">
                        <input type="text" class="input-search" style="border-radius:8px">
                        <i class="icon-search">
                            <img src="{{ asset('images/search.svg') }}" alt="Search">
                        </i>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
<style>
    .dropdown-menu a {
        width: 100px !important;
        white-space: nowrap !important;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 100px;
        z-index: 1000;
    }


    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu:hover {
        display: block;
    }

    .dropdown-menu {
        border-radius: 0 0 10px 10px !important;
        border: none !important;
    }
</style>
