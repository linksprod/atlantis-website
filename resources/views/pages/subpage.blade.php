@include('layouts.front.head')
<meta name="description"
    content="튀니지 여행을 할 수 있는 방법을 제시합니다. 한국에서 튀니지까지의 항공편 정보를 제공하고, 튀니지 일주 시 최적의 여행경로를 공유합니다. 튀니지 지도를 통해 주요 도시를 소개합니다.">
<meta name="keywords"
    content="튀니지 공항

    튀니지 여행

    여행 일정

    튀니지 추천일정

    튀니지 일주

    사하라 사막

    스타워즈

    튀니지 전압

    대한민국 대사관

    시디부사이드

    카이루완

    튀니지 비자">
</head>

<body id="page-subpage">
    @include('layouts.front.header')
    {{-- session 1 --}}
    <section id="section1">
        <div id='section1-slick'>
            <img src="{{ asset('images/MicrosoftTeams-image_(11).png') }}" class="img1" alt="Carthage">
            <img src="{{ asset('images/MicrosoftTeams-image_(12).png') }}" class="img1" alt="Tozeur">
            <img src="{{ asset('images/MicrosoftTeams-image_(13).png') }}" class="img1" alt="Hamamet">
            <img src="{{ asset('images/MicrosoftTeams-image_(14).png') }}" class="img1" alt="Dogga">
            <img src="{{ asset('images/MicrosoftTeams-image_(15).png') }}" class="img1" alt="Monastir">
        </div>
        <div class="overlay-content">
            <img id='icnav' src="{{ asset('images/avion.png') }}" alt="Avion"
                class=" d-flex align-items-center justify-content-center">
            <span class="text">지중해의 보석 튀니지로 떠나요!</span>
        </div>
    </section>
    <div class="sec-con pb-4 pt-4">
        <div class="container">
            {{-- section 2 --}}
            <section id='section2'>
                <div>
                    <p>꿈에 그리던 튀니지 여행을 맞춤화하려면 저희에게 연락하세요.</p>
                    <p class="sub-title sub-title2-3">아틀란티스가 함께합니다.</p>
                </div>
                <div class="button-sub">

                    <a href="/#section-7"
                        class="btn btn-outline-primary d-flex align-items-center btnsect2 radius-20 pr-lg-4 pl-lg-4">
                        <img src="{{ asset('images/enveloppe.png') }}" alt="Enveloppe">
                        문의하기
                    </a>
                </div>
                <div id="ligne-section3"></div>


            </section>
        </div>

    </div>

    <div class="container">
        {{-- session 3 --}}
        <section id='section3'>
            <h2 class="main-title text-center">How to get from KOREA to TUNISIA</h2>
            <p class="text-center">한국에서 튀니지로 여행하는 주요 3가지 방법은 다음과 같습니다</p>
            <div id='slick-section3-web' class="slick-section3-web">
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <img  src="{{ asset('images/Qatar.svg') }}" alt="Airways" class="imgAirways">
                            <p class="sub-sub-title text-center">Qatar Airways</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 11시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 6시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <img  src="{{ asset('images/Turkish.svg') }}" alt="Airways" class="imgAirways">
                            <p class="sub-sub-title text-center">Turkish airlines</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 12시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">이스탄불 <strong> 튀르키예</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 3시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <img  src="{{ asset('images/emirates.svg') }}" alt="Airways" class="imgAirways">
                            <p class="sub-sub-title text-center">Emirates</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 10시간 30분</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 7시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스 <strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pr-lg-3">
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <img  src="{{ asset('images/Airfrance.svg') }}" alt="Airways" class="imgAirways">
                            <p class="sub-sub-title text-center">Airfrance</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 14시간 30분</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 2시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id='slick-section3-mobil' class="slick-section3-mobil">
                <div>
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Qatar Airways</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 11시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">도하<strong>카타르</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 6시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Turkish airlines</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 12시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">이스탄불 <strong> 튀르키예</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 3시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Airfrance</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천<strong> 한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 14시간 30분</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">파리 <strong>프랑스</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 2시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스<strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="crdsess3">
                        <div class="crdsess3prt1 m-3">
                            <p class="sub-sub-title text-center">Emirates</p>
                        </div>
                        <div class="crdsess3prt2">
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">인천 <strong>한국</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 10시간 30분</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">두바이 <strong>(아랍에미리트)</strong></p>
                            </div>
                            <div class="col-3 p-0 route">
                                <hr class="lignedisc">
                                <div>
                                    <img src="{{ asset('images/miniavion.png') }}" alt="Avion">
                                    <p class="mb-0">약 7시간</p>
                                </div>
                            </div>
                            <div class="col-2 p-0">
                                <p class="mb-0 pb-0">튀니스 <strong> 튀니지</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="Popular-Tour"></div>

        {{-- session 4 --}}
        <section id='section4'>
            <h2 class="main-title text-center">Our Most Popular Tour</h2>
            <p class="text-center">아틀란티스가 제안하는 8일 튀니지 추천 여행 일정</p>
            <div id="section4-part1">
                <div class="row p-lg-4 py-2 mr-0">
                    <div class="col-lg-4 py-lg-4 section4-part1-part1">
                        <h2 class="sub-title">튀니지 5성급 일주 </h2>
                        <p>- 사하라사막 포함 </p>
                        <p>- 스타워즈 촬영지 방문</p>
                        <p>- 프리미엄 호텔 숙박 </p>
                        <p>- 영어 가이드 동행</p>
                    </div>
                    <div class="col-lg-8  one-time-slide">
                        <img id='imgsesss4' src="{{ asset('images/Tunsi_medina-Tunisatrip.png') }}"
                            alt="Tunsi medina">
                        <div class="d-flex sccgrp p-lg-3 sess1direct w-100 justify-content-between" id="dirct">
                            <img src="{{ asset('images/lftbl.svg') }}" onclick="ChangImgSess4(-1)" alt='Arrow left'>
                            <img src="{{ asset('images/rgtbl.svg') }}" onclick="ChangImgSess4(1)" alt='Arrow right'>
                        </div>
                    </div>
                </div>
            </div>
            {{-- web --}}
            <div class=" mt-5 section4-part2 section4-part2-web">
                <div class="row">
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 1</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">튀니지 도착</p>
                                <p> 카르타고 유적지 - 시디 부 사이드</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 5</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">두즈 - 마트마타 - 스팍스 (숙박) </p>
                                <p> 쇼트 엘 제리드 소금호수 - 동굴도시</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 2</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">두가</p>
                                <p> 두가 로마 원형극장</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 6</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">엘젬</p>
                                <p> 엘젬 원형극장(콜로세움) - 엘젬 박물관</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 3</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">카이루완 - 스베틀라 - 토주르 (숙박)</p>
                                <p> 카이루완 대모스크 - 카펫 구경 - 스베틀라 고고학 건축물</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 7</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">수스</p>
                                <p> 메디나 - 리바트</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 4</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">토주르 - 쉐비카 - 타메르자 </p>
                                <p> 오아시스 = 스타워즈 촬영지</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex h-100">
                        <button type="button" class="btn btn-outline-primary  radius-20 btnday ">DAY 8</button>
                        <div class='sect4crd ml-lg-3 w-100'>
                            <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                            <div class="pl-lg-3">
                                <p class="sub-sub-title mb-1">튀니스 </p>
                                <p> 바르도 박물관 - 튀니스 메디나</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" mt-5 section4-part2 section4-part2-mobil">
                <div class="slick-section4">
                    <div class="row">
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 1</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">튀니지 도착</p>
                                    <p> 카르타고 유적지 - 시디 부 사이드</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 2</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">두가</p>
                                    <p> 두가 로마 원형극장</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 3</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">카이루완 - 스베틀라 - 토주르 (숙박)</p>
                                    <p> 카이루완 대모스크 - 카펫 구경 - 스베틀라 고고학 건축물</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 4</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">토주르 - 쉐비카 - 타메르자 </p>
                                    <p> 오아시스 = 스타워즈 촬영지</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 5</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">두즈 - 마트마타 - 스팍스 (숙박) </p>
                                    <p> 쇼트 엘 제리드 소금호수 - 동굴도시</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 6</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">엘젬</p>
                                    <p> 엘젬 원형극장(콜로세움) - 엘젬 박물관</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 7</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">수스</p>
                                    <p> 메디나 - 리바트</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex h-100">
                            <button type="button" class="btn btn-outline-primary  radius-20 btnday">DAY 8</button>
                            <div class='sect4crd ml-lg-3 w-100'>
                                <img src="{{ asset('images/RectangleSect4.png') }}" alt="Rectangle" class="h-100">
                                <div class="pl-lg-3">
                                    <p class="sub-sub-title mb-1">튀니스 </p>
                                    <p> 바르도 박물관 - 튀니스 메디나</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div id="to-main routes"></div>

        {{-- session 5 --}}
        <section id='section5'>
            <h2 class="main-title text-center">Our Trips’ main routes</h2>
            <p class="text-center">튀니지 내 필수 방문도시들과 경로를 확인해보세요.</p>
            <div class="wrap-trips-routes">
                <div class="img-container img-section5">
                    <img id='imgMap' src="{{ asset('images/trips-routes/map-tour1.svg') }}" alt="trips-routes"
                        width="596">
                    <div class="wrap-single-zone zone-tunis" href='tunis-zone'>
                        @include('pages.zones.tunis-zone')
                    </div>
                    <div class="wrap-single-zone zone-kerkouane">
                        <a title=""></a>
                        @include('pages.zones.douz-zone')
                    </div>
                    <div class="wrap-single-zone zone-sousse" href='zone-sousse'>
                        @include('pages.zones.sousse-zone')
                    </div>
                    <div class="wrap-single-zone zone-kairouane" href='zone-kairouane'>
                        @include('pages.zones.kairouane-zone')
                    </div>
                    <div class="wrap-single-zone zone-sufetela" href='zone-dogga'>
                        @include('pages.zones.dogga-zone')
                    </div>
                    <div class="wrap-single-zone zone-tozeur" href='zone-tozeur' id="tozeur">
                        <a title="Tozeur"></a>
                        @include('pages.zones.tozeur-zone')
                    </div>
                    <div class="wrap-single-zone zone-matmata" href='zone-matmata'>
                        @include('pages.zones.matmata-zone')
                    </div>
                    <div class="wrap-single-zone zone-djerba" href='zone-djerba'>
                        @include('pages.zones.djerba-zone')
                    </div>
                    <div class="wrap-single-zone zone-eljem" href='zone-eljem'>
                        @include('pages.zones.eljem-zone')
                    </div>
                    <div class="wrap-single-zone zone-sfax" href='zone-sfax'>
                        @include('pages.zones.sfax-zone')
                    </div>
                    <div class="btnchngimg">
                        <button class="btn btnimgbl" id="btnchngMpImg" onclick="chngMpImg()"><i
                                class="fa-temperature-high fas"></i>
                        </button>
                    </div>
                </div>
                <div id="sectionDescription" class="wrap-trips-routes-infos">
                    <div class="content" id="sadok"></div>
                </div>
            </div>
        </section>


        {{-- session 6 --}}
        <section id='section6'>
            <h2 class="main-title text-center">Tips before trips</h2>
            <p class="text-center">자주 하는 질문을 확인하고 여행을 준비해 보세요.</p>

            <div class="section6-slick">
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>어떤 어댑터를 사용하나요?</h2>
                    <p id="section6p">튀니지에서는 한국과 동일한 220v 전압을 사용합니다. 따로 변환 플러그나 어댑터가 없어도 된다는 게 장점이에요.</p>

                    <img class=" img-section6" src="{{ asset('images/adaptateur.png') }}">

                </div>

                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지에 약을 가지고 들어갈 수 있나요?</h2>
                    <p id="section6p">튀니지로 의약품을 반입할 수 있지만 모르핀이 포함된 의약품이 있다면 의약품 처방전을 지참해 오세요.</p>
                    <img class=" img-section6" src="{{ asset('images/Mediacamenet.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지에 대한민국 대사관이 있나요?</h2>
                    <p id="section6p">네, 대한민국 대사관이 있습니다.<br>

                        주소: Immeuble BLUE SQUARE, Avenue de la Bourse, Les Berges du Lac 2, 1053 Tunis, Tunisie<br>

                        전화: +216-71- 198- 595 / 71-198-596 / 71-198-597<br>

                        E-Mail : tunisie@mofa.go.kr<br>

                        비상 연락처 : +216-99 -567-040</p>
                    {{--  <img class=" img-section6-4" src="{{ asset('images/ambassade.png') }}"> --}}
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지 내 한식당이 있나요?</h2>
                    <p id="section6p">네, 튀니스 내 한인이 직접 운영하는 한식당과 튀니지인이 운영하는 한식당이 있습니다.<br>

                        – 튀니스 중심가: KOKODAK, Kim’s table<br>

                        – 락2 한국대사관 근처: K-Zip<br>

                        – 라 마르사 : KIMCHI<br>

                        – 엔 나스르: Le Bambou</p>
                    <img class=" img-section6" src="{{ asset('images/restaurant.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지 방문 시 비자를 발급받아야 하나요?</h2>
                    <p id="section6p">튀니지 방문시 비자를 받지 않아도 됩니다. 최대 90일간 무비자 체류가 가능합니다.</p>
                    <img class=" img-section6" src="{{ asset('images/visa.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>어떤 통화(화폐)를 쓰나요?</h2>
                    <p id="section6p">통화는 튀니지 디나르입니다. 현금 자동 인출기를 쉽게 찾을 수 있고, 공항이나 호텔이나 은행, 환전소, 우체국에서 달러 혹은 유로 현금을 현지
                        통화로 교환할 수 있어요.</p>
                    <img class=" img-section6" src="{{ asset('images/argent.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지에서 술이 허용되나요?</h2>
                    <p id="section6p">튀니지에서 술을 마실 수 있습니다. 하지만 이슬람의 영향으로 금요일에는 술 판매가 금지되며 길거리에서 술을 마시는 것도 불법입니다.
                        튀니지산 맥주 브랜드인 셀티아(Celtia)와 와인 브랜드인 마공(Magon)이 유명합니다.</p>
                    <img class=" img-section6-3" src="{{ asset('images/alcool.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>주말에 박물관 방문이 가능한가요?</h2>
                    <p id="section6p">대부분의 튀니지 박물관은 토요일, 일요일에 운영하며<br> 월요일이 휴무입니다. 하지만 미리 확인 후 방문하시는 걸 추천드려요.</p>
                    <img class=" img-section6-1" src="{{ asset('images/musuem.png') }}">

                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지도 다른 이슬람 국가들처럼 금요일, 토요일이 주말인가요?</h2>
                    <p id="section6p">튀니지는 토요일, 일요일을 주말로 채택하고 있습니다.</p>
                    <img class=" img-section6-7" src="{{ asset('images/Calndrier.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지에 히잡을 써야하나요?</h2>
                    <p id="section6p">튀니지는 이슬람 국가 중에서도 개방적인 나라에 속하며, 히잡착용은 개인의 자유입니다.</p>
                    <img class=" img-section6-5" src="{{ asset('images/hijab.png') }}">
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>한국에서 핸드폰 유심을 사서 갈 수 있나요?</h2>
                    <p id="section6p">튀니지 공항에 도착하시면 심카드를 구매할 수 있는 매장이 있습니다. 공항 내 Ooredoo 혹은 Orange 매장에서 심카드를 구매하는 걸
                        추천드려요.</p>
                    <img class=" img-section6-6" src="{{ asset('images/sim.png') }}">
                </div>
                {{-- ajouter autre card --}}
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>튀니지 디나르를 다시 달러나 유로로 재환전할 수 있나요?</h2>
                    <p id="section6p">네, 외환을 디나르로 환전할 때 받은 환전증을 제시하면 가능합니다. 튀니지 디나르는 입반출 금지 물품으로서 신고여부와 관계없이 입반출 자체가
                        제한됩니다.</p>
                    {{--                     <img class=" img-section6-6" src="{{ asset('images/sim.png') }}">
 --}}
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>외화 반출입 관련 유의사항이 있나요?</h2>
                    <p id="section6p">튀니지 당국은 출국시 외환 불법 반출 여부를 철저히 단속중인바, 모든 여행객은 외화 입반출 가능 상한액을 확인하고 입출국 시 세관에 신고해야
                        합니다.<br>
                        아래 대사관 홈페이지 참고 <br>https://overseas.mofa.go.kr/tn-<br>ko/brd/m_21401/view.do?seq=1321109&page=2</p>
                    {{--                     <img class=" img-section6-6" src="{{ asset('images/sim.png') }}">
--}}
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>기념품은 어디서 구매할 수 있나요?</h2>
                    <p id="section6p">각 도시의 메디나(구시가지) 시장 혹은 관광지 근처에서 살 수 있습니다. 수공예품의 경우, 마르사에 위치한 컨셉스토어에서도 구매할 수 있습니다.
                    </p>
                    {{--                     <img class=" img-section6-6" src="{{ asset('images/sim.png') }}">
--}}
                </div>
                <div id="section6cont">
                    <h2 class="sub-title" id='section6h2'>공항 서비스 이용 시 만남 장소가 어딘가요?
                    </h2>
                    <p id="section6p">카르타고 공항의 입국장 지도를 확인하세요.
                    </p>
                    {{-- <img class=" img-section6-5" src="{{ asset('images/hijab.png') }}"> --}}
                </div>
            </div>


        </section>
    </div>

    @include('layouts.front.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
