@include('page1.script')
<meta name="keywords" content="튀니지

메디나

낙타체험

북아프리카 보석

지중해 진주

자이투나

튀니지 관광

페니키아

로마 유적지

오스만">

<meta name="description" content="튀니지 여행과 관련한 홍보영상, 방문객 후기, 주요 튀니지 도시들을 안내하며 여행 관련 질문을 남길 수 있는 문의하기 창이 있습니다.">
</head>

<body id="index" class="tunisiatrip">
    @include('layouts.front.header')

    <main>
        <div id="mySlickCarousel">
            <div class="slick-slider">
                <div class="slick-slide">
                    <img src="{{ asset('images/Tunisie-Sahara.png') }}" class="img1" alt="Tunisie Sahara">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1" id='text1'>사하라 사막의 시작</span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/El-Jem.png') }}" alt="El Jem Tunisie" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1" id='text2'>살아 숨쉬는 고대 역사</span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/Tataouine.png') }}" class="img1" alt="Tataouine Tunisie">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1" id='text3'>스타워즈의 발자취를 찾아</span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide">
                    <img src="{{ asset('images/Sidi-Bou-Saïd.png') }}" alt="Sidi Bou Saïd Tunisie" class="img1">
                    <div class="overlay-content">
                        <div class="text-center">
                            <span class="text1" id='text4'>파란 하늘, 푸른 바다</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div class="container icons-none">
        <div class="flex-container pt-5 sessicn">
            <a href="about-atlantis#ligne-section-5">
                <div class="icns" onmouseenter="changeImage(true,1)" onmouseleave="changeImage(false,1)">
                    <img id='img1' src="{{ asset('images/Icon_1_Second_Animation.gif') }}" class="imgicns">
                    <p id="p1" class="txticns">호텔</p>
                </div>
            </a>
            <div class=" ligne1 m-4 lg">|</div>
            <a href="trip-itinerary#ligne-section3">
                <div class="icns" onmouseenter="changeImage(true,2)" onmouseleave="changeImage(false,2)"><img id='img2'
                        src="{{ asset('images/Icon_2_Second_Animation.gif') }}" class="imgicns">
                    <p id="p2" class="txticns">항공편</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="travel-information#p3-section5">
                <div class="icns" onmouseenter="changeImage(true,3)" onmouseleave="changeImage(false,3)"><img id='img3'
                        src="{{ asset('images/Icon_3_Second_Animation.gif') }}" class="imgicns">
                    <p id="p3" class="txticns">축제</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="about-tunisia#ligne-section9">
                <div class="icns" onmouseenter="changeImage(true,4)" onmouseleave="changeImage(false,4)"><img id='img4'
                        src="{{ asset('images/Icon_4_Second_Animation.gif') }}" class="imgicns">
                    <p id="p4" class="txticns">활동</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="about-atlantis#to-section-4">
                <div class="icns" onmouseenter="changeImage(true,5)" onmouseleave="changeImage(false,5)"><img id='img5'
                        src="{{ asset('images/Icon_5_Second_Animation.gif') }}" class="imgicns">
                    <p id="p5" class="txticns">자동차 서비스</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="trip-itinerary#Popular-Tour">
                <div class="icns" onmouseenter="changeImage(true,6)" onmouseleave="changeImage(false,6)"><img id='img6'
                        src="{{ asset('images/Icon_6_Second_Animation.gif') }}" class="imgicns">
                    <p id="p6" class="txticns">크루즈</p>
                </div>
            </a>
            <div class="ligne1 m-4 lg">|</div>
            <a href="travel-information#p3-section4">
                <div class="icns" onmouseenter="changeImage(true,7)" onmouseleave="changeImage(false,7)"><img id='img7'
                        src="{{ asset('images/Icon_7_Second_Animation.gif') }}" class="imgicns">
                    <p id="p7" class="txticns">박물관</p>
                </div>
            </a>
        </div>
    </div>




    <section id="section-2">
        <div class="container mt-2">
            {{-- <div class="row reverse m-0">
                <div class="col-6 r-image1">
                    <div class="image-1 box-shadox" onclick="handleClick(1)" id="image-1">
                        <div class="ml-4">
                            <div class="d-flex flex-column align-items-start">
                                <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-6 d-flex flex-column justify-content-between p-0 pr-0">
                    <div class="d-flex gap-30">
                        <div class="w-50">
                            <div class="image-2 links_box-shadox" onclick="handleClick(2)" id="image-2">
                                <div class="text-sm inner-wrap-block-image">

                                    <button type="button" class="btn btn-outline-primary mt-4 r-btn2">
                                        메디나 역사지구

                                    </button>
                                    <p class="p-2 parag-img" id='crdp2'>메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이
                                        곳에서
                                        기념품도 구매할 수 있어요.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="image-3 links_box-shadox" onclick="handleClick(3)" id="image-3">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">튀니지 미식
                                        체험</button>
                                    <p class="p-2 parag-img" id='crdp3'>튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대
                                        페니키아,
                                        로마, 오스만제국을 거쳐 프랑스의
                                        영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex gap-30">
                        <div class="w-50">
                            <div class="image-4 links_box-shadox" onclick="handleClick(4)" id="image-4">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">인기
                                        목적지</button>
                                    <p class="p-2 parag-img" id='crdp4'>시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가
                                        있어요.
                                        과거와 현대가 공존하고 유럽과
                                        아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="image-5 links_box-shadox" onclick="handleClick(5)" id="image-5">
                                <div
                                    class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                                    <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">즐길거리</button>
                                    <p class="p-2 parag-img" id='crdp5'>사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한
                                        액티비티를 즐길
                                        수 있어요.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="row slick-slide1">
                <div class="col-md-4 my-4">
                    <div class="image-1 box-shadox" onclick="handleClick(1)" id="image-1">
                        <div class="d-flex flex-column align-items-center">
                            <button class="btn btn-outline-primary mt-4 r-btn1 mr-6">고고학 유적지</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2">
                    <div class="image-4 links_box-shadox" onclick="handleClick(4)" id="image-4">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn4">즐길거리</button>
                            <p class="p-2 parag-img" id='crdp4'>시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가 있어요.
                                과거와 현대가 공존하고 유럽과
                                아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                        </div>
                    </div>
                    <div class="image-5 links_box-shadox" onclick="handleClick(5)" id="image-5">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn5">인기 목적지</button>
                            <p class="p-2 parag-img" id='crdp5'>사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한 액티비티를 즐길
                                수 있어요.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 my-2">

                    <div class="image-3 links_box-shadox" onclick="handleClick(3)" id="image-3">
                        <div
                            class="align-items-center d-flex flex-column justify-content-between inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary  mt-4 r-btn3">메디나 역사지구</button>
                            <p class="p-2 parag-img" id='crdp3'>튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대 페니키아,
                                로마, 오스만제국을 거쳐 프랑스의
                                영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                        </div>
                    </div>
                    <div class="image-2 links_box-shadox" onclick="handleClick(2)" id="image-2">
                        <div class="text-sm inner-wrap-block-image">
                            <button type="button" class="btn btn-outline-primary mt-4 r-btn2">
                                튀니지 미식 체험
                            </button>
                            <p class="p-2 parag-img" id='crdp2'>메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이 곳에서
                                기념품도 구매할 수 있어요.
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row block-cards" id="slicksect2">
                <div class="col-lg-3 section-2-hover">
                    <div class="links_box-1">

                    </div>
                    <div class="height-p-card mt-lg-3">
                        <button type="button" class="btn btn-outline-primary btn1-b">메디나
                            역사지구</button>
                        <p class="p1prt7 ">메디나 전통시장에서 역사적 정취를 느끼고,튀니지의 문화를 체험해보세요. 이
                            곳에서
                            기념품도 구매할 수 있어요.</p>
                    </div>
                </div>
                <div class="col-lg-3 section-2-hover">
                    <div class="links_box-2">

                    </div>
                    <div class="height-p-card mt-lg-3">
                        <button type="button" class="btn btn-outline-primary btn1-b">튀니지 미식
                            체험</button>
                        <p class="p1prt7 ">튀니지 음식은 동서양 요리 양식이 혼합된 형태예요. 역사적으로 고대
                            페니키아,
                            로마, 오스만제국을 거쳐 프랑스의
                            영향도 많이 받았어요. 올리브 오일, 향신료, 토마토, 해산물, 닭고기나 양고기를 기반으로 한 요리가 많아요.</p>
                    </div>
                </div>
                <div class="col-lg-3 section-2-hover">
                    <div class="links_box-3">

                    </div>
                    <div class="height-p-card mt-lg-3">
                        <button type="button" class="btn btn-outline-primary btn1-b ">인기
                            목적지</button>
                        <p class="p1prt7 ">시디부사이드, 엘젬, 두가, 수스 등 매력이 각기 다른 인기 목적지가
                            있어요.
                            과거와 현대가 공존하고 유럽과
                            아프리카, 아랍의 다양한 색깔이 함께하는 튀니지의 여러 도시들을 방문해보세요.</p>
                    </div>
                </div>
                <div class="col-lg-3 section-2-hover">
                    <div class="links_box-4">

                    </div>
                    <div class="height-p-card mt-lg-3">
                        <button type="button" class="btn btn-outline-primary btn1-b">즐길거리</button>
                        <p class="p1prt7 ">사하라사막에서의 낙타 타기 체험, 지중해 바다에서의 서핑 등 다양한
                            액티비티를 즐길
                            수 있어요.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



    {{-- <div class="lignes"></div> --}}

    <section id="section-3">
        <div class="container sess3mobvid text-center">
            <div class="text2">
                <h2 class="main-title">Promotional video</h2>

                <p>튀니지의 매력을 영상으로 확인해보세요.사하라 사막부터 역사가 살아숨쉬는 도시까지.<br>
                    북아프리카의 보석 튀니지의 풍부한 문화가 당신을 기다립니다.</p>
            </div>
            <div class="wrap-video w-100">
                <iframe class="video-js" src="https://www.youtube.com/embed/21r1M3L-yqM?si=4nA-T16uk1ekfLQ6"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>

    </section>

    <section id="section-9" class="background-section">
        <div class="container text-center">
            <div class="text2">
                <h2 class="main-title">Tunisia live weather</h2>
            </div>
            <div class=" buttons btn-section-9">
                <button id='btnTunis' class="p-2  btnactv">튀니스</button>
                <button id='btnSfax' class="p-2 btninactv">스팍스</button>
                <button id='btnKairouan' class="p-2 btninactv">카이로우안</button>
            </div>
            <div id="tunis-weather">
                <div id="ww_51f06295ce562" v='1.3' loc='id'
                    a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl2977"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                    More forecasts: <a href="https://oneweather.org/fr/paris/20_jours/" id="ww_51f06295ce562_u"
                        target="_blank">Prévisions météo 20 jours</a></div>
                <script async src="https://app2.weatherwidget.org/js/?id=ww_51f06295ce562"></script>
            </div>
            <div id="sfax-weather">
                <div id="ww_a4fcd1b6e1551" v='1.3' loc='id'
                    a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl3361"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                    More forecasts: <a href="https://oneweather.org/fr/paris/20_jours/" id="ww_a4fcd1b6e1551_u"
                        target="_blank">Prévisions météo 20 jours</a></div>
                <script async src="https://app2.weatherwidget.org/js/?id=ww_a4fcd1b6e1551"></script>
            </div>
            <div id="kairouan-weather">
                <div id="ww_2939843357c77" v='1.3' loc='id'
                    a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl1701"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>
                    More forecasts: <a href="https://oneweather.org/fr/paris/20_jours/" id="ww_2939843357c77_u"
                        target="_blank">Prévisions météo 20 jours</a></div>
                <script async src="https://app2.weatherwidget.org/js/?id=ww_2939843357c77"></script>
            </div>
        </div>

    </section>

    {{-- <div class="lignes"></div> --}}

    <section id="section-4">
        <h2 class="main-title12">Tunisia's main cities</h2>

        <div class="container sess3">
            <div class="city-section">
                <div class="w-100 ">
                    <div class="image1-2 links_box-shadox" id="imageCov1">
                    </div>
                    <p id="paragraph1" class="links_box-p"> 튀니스는 튀니지 북부에 있는 도시이자 수도로, 튀니지 최대도시예요.
                        대표적인 관광지인 고대 카르타고 유적과 중세 구시가지 메디나는 유네스코 세계문화유산에 등재됐고요.
                        외곽에 위치한 시디 부 사이드는 튀니스 만 위 절벽에 높게 자리잡은 작고 예쁘게 하얀 색칠을 한 마을로 꼭 방문해야할 명소입니다.
                        도시 자체가 지닌 오랜 역사에 프랑스 지배로 인한 유럽풍까지 더해 여러 매력이 공존하는 도시예요!</p>

                    <div class="image1-2 links_box-shadox" id="imageCov2">
                    </div>
                    <p id="paragraph2" class="links_box-p">튀니스에서 105km 남서쪽에 있는 두가는 한 때 번영했던 고대 로마의 도시 중 하나예요,. 두가의
                        로마유적은
                        북아프리카에서 가장 잘 보존된 것으로 꼽힙니다.
                        수천 년의 세월이 담긴 역사성과 보존의 탁월함을 인정받아 인정받아 1997년 유네스코 문화유산에 등재 되었구요.
                        의사당과 포럼, 원형 극장과 공중목욕탕 등 로마 제국 변방에 있던 작은 도시의 모습을 보여주는 인상적인 유적들을 확인할 수 있습니다.</p>

                    <div class="image1-2 links_box-shadox" id="imageCov3">
                    </div>
                    <p id="paragraph3" class="links_box-p">튀니지 중심부에 위치한 카이로우안은 성도이자 이슬람의 정신적 수도 중 하나예요.
                        메카, 메디나, 예루살렘에 이어 이슬람교에서 네 번째 성지로 매우 중요한 지위를 차지합니다.
                        카이루안 대모스크는 북아프리카 이슬람 사원 중 가장 오래되었으며 튀니지에서 가장 큰 사원이자 건축사적으로 중요한 건축물이에요.
                        모스크 외에도 수공예품이 유명하며 카펫 수공업의 규모가 커요.
                        카이로우안(Kairouan)는 튀니지의 유네스코 세계 문화유산으로 1988년에 등재되었습니다.</p>

                    <div class="image1-2 links_box-shadox" id="imageCov4">
                    </div>

                    <p id="paragraph4" class="links_box-p">과거 베르베르인들이 과거 침략으로부터 자신들을 보호하기 위해 건설했던 세계에서 가장 큰 지하마을이에요.
                        돌을 깎아 만든 독특한 구조의 동굴가옥은 태양을 차단하고 온도를 조절하여 일년 내내 기온이 상대적으로 시원하게 유지돼요.
                        현재 많은 주택들은 호텔로 개조되어 베르베르인들의 생활 방식을 경험하기 위해 찾는 관광객들을 맞이하고 있어요.
                        특히 스타워즈의 농가 장면이 촬영지인 시디 드리스 호텔(Sidi Driss Hotel)이 유명합니다.</p>
                </div>
            </div>
            <div class=" scroll-container w-100 ">
                <div class="sess3-web variable-width">
                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Sidi-Bou-Saïd.png') }}" class="imageB1" id="imageB1"
                            alt='Sidi Bou Saïd' {{-- onclick="changeImage1()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p " id='crd2h1'>튀니스</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn1-b text-center mr" id="btn1">수도</button>
                                <button class="btn btn-outline-primary btn1-b1 ml-2 text-center" id="btn1-b">동쪽</button>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Rectangle 821.png') }}" class="imageB2" id="imageB2" alt="Sahara"
                            {{-- onclick="changeImage2()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p2" id='crd2h2'>두즈</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn2 text-center btn1-b" id="btn2">따뜻한</button>
                                <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center"
                                    id="btn2-b">남쪽</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Kairuan.png') }}" class="imageB3" id="imageB3"
                            alt='The Great Mosque of Kairouan' {{-- onclick="changeImage3()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p3" id='crd2h3'>카이루안</span>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn3 text-center btn1-b" id="btn3">따뜻한</button>
                                <button class="btn btn-outline-primary btn1-b3 ml-2 text-center" id="btn3-b">남쪽</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Matmata.png') }}" class="imageB4" id="imageB4" alt='Matmata Tunisie'
                            {{-- onclick="changeImage4()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p4" id='crd2h4'>마트마타</span>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn4 text-center btn1-b" id="btn4">따뜻한</button>
                                <button class="btn btn-outline-primary btn1-b4 ml-2 text-center" id="btn4-b">남쪽</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Sousse-tunisiatrip.jpg') }}" class="imageB5" id="imageB4"
                            alt='Matmata Tunisie' {{-- onclick="changeImage4()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p4" id='crd2h4'>수스</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn1-b text-center mr btn1-b"
                                    id="btn1">따뜻한</button>
                                <button class="btn btn-outline-primary btn1-b1 ml-2 text-center" id="btn1-b">동쪽</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Sfax_tunisaitrip.jpg') }}" class="imageB6" id="imageB4"
                            alt='Matmata Tunisie' {{-- onclick="changeImage4()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p4" id='crd2h4'>스팍스</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn2 text-center btn1-b" id="btn2">따뜻한</button>
                                <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center"
                                    id="btn2-b">남쪽</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/Djerba_Sidi_Jmour_mosque_tunisiatrip.jpg') }}" class="imageB4"
                            id="imageB4" alt='Matmata Tunisie' {{-- onclick="changeImage4()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p4" id='crd2h4'>제르바</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn2 text-center btn1-b" id="btn2">따뜻한</button>
                                <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center"
                                    id="btn2-b">남쪽</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column affmob pr-lg-3">
                        <img src="{{ asset('images/star_wars_touzer-tunisiatrip.jpg') }}" class="imageB7" id="imageB4"
                            alt='Matmata Tunisie' {{-- onclick="changeImage4()" --}}>
                        <div class="d-flex flex-column align-items-start">
                            <span class="text-p4" id='crd2h4'>토주르</span>
                            <div class=" d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn2 text-center btn1-b" id="btn2">따뜻한</button>
                                <button class=" btn btn-outline-primary btn1-b2 ml-2 text-center"
                                    id="btn2-b">남쪽</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>



    <section id="section-5">
        <div class="container">
            <h2 class="main-title text-center">Visitor Reviews</h2>
            <div class="row slick-slider-visitRev">
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG (3).png') }}" alt='girl' class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title title">진OO</h5>
                            <p class="card-text">머리는 유럽에, 가슴은 아랍에, 발은 아프리카에 있는 나라. 수도에서 조금만 나가보시면 수수하지만 절대 밋밋하지는 않은 매력을
                                가진 관광지들이 있습니다. 켈리비야나 하와리야에 가보시는 걸 추천합니다! 마치 히든 플레이스에 오신 기분이 들겁니다!</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center ">
                        <img class="imgwj1" src="{{ asset('images/BG (2).png') }}" alt='boy' class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">백OO</h5>
                            <p class="card-text">튀니지 사람들은 친절해요!! 눈 마주치면 꼭 인사를 해줍니다^___^ ‘하리싸’가 들어간 음식이 많아서 매운음식 생각날때
                                맛있게 먹었어요! 튀니지 빵이 정말 맛있어요! 아침 베이커리에서 갓구운 빵은 꼭 먹어보세요 여름은 햇빛이 정말 강해서 선크림, 선글라스는 필수지만 습도가 높지
                                않아서 그늘에 있으면 시원합니다!</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG1 (2).png') }}" alt="homme"
                            class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">오OO</h5>
                            <p class="card-text">유럽같으면서 아랍적인 독특한 매력을 가진 나라 튀니지. 지중해를 배경으로하는 시디부사이드의 모습은 아직도 잊지 못할 것
                                같습니다. 사람들도 친절했고 음식도 맛있었고 좋은 기억만 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev" id='crd1'>
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG1 (2).png') }}" alt="homme"
                            class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">박OO</h5>
                            <p class="card-text">전 6개월 간 튀니지 튀니스에서 지냈는데 낯설고 새로운 나라였지만 즐겁게 생활했습니다. 생각보다 안전하기도 했고 이슬람교
                                국가지만 개방적인 편이라 무슬림이 아니어도 생활하는데 큰 어려움은 없었어요. 물론 인종차별도 있고 한국인에게 과한 관심을 보일 때도 종종 있었지만 위협적으로
                                느껴질 만큼은 아니었어요. 튀니지에 간다면 시디 부 사이드, 메디나에 방문해보시는 걸 추천드려요. 시디 부 사이드에서는 탁 트인 바다를 볼 수 있고
                                메디나에서는 튀니지 전통시장 분위기를 느낄 수 있어요. 또 튀니스를 벗어나서 수스, 모나스티르에서 휴양을 즐기는 것도 좋았고 사하라 사막 여행도 잊지 못할
                                경험이었으니 여유 있게 일정 짜셔서 튀니스 말고도 여러 군데 가보시면 좋을 것 같아요:)</p>
                            <button class="crdlng1 btn-toggle" id='btn1' onclick="crdheight(1)">더 보기</button>
                        </div>
                    </div>
                </div>
                <div class="crdrev" id="crd2">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG (3).png') }}" alt='girl' class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title title">전OO</h5>
                            <p class="card-text">지중해 국가 여행을 색다르게 해보고 싶다면 튀니지는 분명히 매력적으로 다가올 것 같아요. 그리스 산토리니를 연상케하는 시디 부
                                사이드에서 파란색과 흰색의 조화와 함께 이슬람 분위기까지 동시에 느낄 수 있어요. 튀니지 남부에 위치한 두즈에는 사막이 있어 낙타 탑승과 모터사이클 체험에
                                사막에서 1박하기까지! 사막에서 베드윈족과 함께 그들의 생활양식을 체험할 수 있다는 경험 자체가 설레지 않을까요?? 푸른 지중해와 이색적인 사막을 모두 즐기고
                                싶다면 튀니지로 오세요 :)</p>
                            <button class="crdlng1 btn-toggle" id='btn2' onclick="crdheight(2)">더 보기</button>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG (2).png') }}" alt='boy' class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">마OO</h5>
                            <p class="card-text">사람들이 친절하고 역사가 깊은 튀니지 ! 고대 로마 유적지를 눈 앞에서 볼 수 있고 밤발로니, 쿠스쿠스, 하리사 등
                                한국사람한테 입맛이 정말 딱 맞는 음식들 사랑해요</p>
                        </div>
                    </div>
                </div>

                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG (3).png') }}" alt='girl' class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title title">임OO</h5>
                            <p class="card-text">튀니지를 도착했을때 아 이곳이 북아프리카구나~ 했던 생각들이 이주일 뒤엔 이곳이 그리스인가? 하고 바뀌었어요. 갔다 와 보시면
                                아실거예요.. 죽기 전에 꼭 다시 한번 와보고 싶다 하는것을!!! 매일 점심마다 400원 주고 먹었던 고급 음식 샤와르마가 눈에 아른 거리네요

                                다들 꼭 와보세요 세상 많은 나라를 다녔지만 튀니지 진짜 강추입니다!</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG (2).png') }}" alt='boy' class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">이OO</h5>
                            <p class="card-text">튀니지는 여행지가 진짜 매력적인 나라라고 생각합니다. 감마르트, 수스, 함마메트 등 꼭 가봐야하는 여행지가 매우 많습니다.
                                아름다운 지중해 바다의 매력을 푹 느낄 수 있는 나라입니다. 튀니지 사람들도 한국인에게 대체로 호의적인 편이었다고 생각합니다. 튀니지 해산물 요리 한번
                                도전해보시길 추천드립니다.</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG1 (2).png') }}" alt="homme"
                            class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">송OO</h5>
                            <p class="card-text">튀니지는 예쁜 해변이 많아서 여름에 수영하기 좋아요. 튀니지에 여러 유명한 바다가 있지만 가장 최고는 비제르트입니다. 이곳에
                                한번 왔다가면 다른 곳의 바다는 눈에 들어오지도 않을정도랍니다. 관광객이 적고 현지인들만 아는 진짜 사파이어 바다를 경험해보시길 바라요. 수영을 하고 나선
                                베네치아 느낌이 나는 항구 옆에 자리잡은 메디나를 천천히 구경하면서 예쁜 옷과 가방을 사는 것도 추천드립니다!!</p>
                        </div>
                    </div>
                </div>
                <div class="crdrev">
                    <div class="card h-100 d-flex flex-column justify-content-center align-items-center">
                        <img class="imgwj1" src="{{ asset('images/BG1 (2).png') }}" alt="homme"
                            class="card-img-top boy">
                        <div class="card-body text-center">
                            <h5 class="card-title title">정OO</h5>
                            <p class="card-text">튀니지의 사하라사막에서의 하룻밤은 평생 기억에 남을거예요. 쏟아지는 별을 보다가 자고, 또 아침 일출을 보면서 튀니지에 온 걸
                                참 잘했다고 생각했어요. 한번쯤 방문해보세요!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="section-6">
        <div class="container">
            <div class="divundf">
                <span class="textbas">여기에 더 많은 의견</span>
                <img class='imgwjhmob' src="{{ asset('images/Property 1=Default.png') }}" alt="faces">
            </div>
            <hr class="lignes">
            <button class="btn btn-outline-primary button3">여기에서 더 많은 의견을 확인하세요</button>
        </div>
    </section>
    <section id="section-7">
        <div class="container ">
            <h2 class="main-title text-center">Contact Us</h2>

            {{-- <p class=" text-center">문의사항에 빠르고 친절하게 답변해 드리겠습니다</p> --}}
            <div class="row mr-0 card-contact">
                <div class="col-md-6 right-Contact p-5">
                    <div id="logform" class="pr-lg-4">
                        <div class="sub-title">1:1 문의하기</div>
                        <p class="text-center">문의사항에 빠르고 친절하게 답변해 드리겠습니다</p>
                    </div>
                    <div class="img-Contact">
                        <img class="img-Contact" src="{{ asset('images/Atlantis_logo_temporary.svg') }}"
                            alt="Atlantis logo">
                    </div>
                    <div class="PContact">
                        <p><strong>주소:</strong> 29, AV.du,Japon, Imm. Fatma 1002 Montplaisir - Tunis</p>
                        <p><strong>이메일:</strong> atlantis@atlantis.tn</p>
                        <p><strong>연락처:</strong> +216 31 31 8000</p>
                    </div>
                </div>

                <div class="col-md-6 m-lg-0 pl-lg-3 form-mobil pr-lg-0">
                    <form action="{{ route('mailings.store') }}" method="POST" id='formmail'>
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nom" id="nom" class="txt1 px-3 frminptstyl" placeholder="이름"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="txt1 px-3 frminptstyl" placeholder="이메일"
                                required>
                        </div>
                        <div class="form-group mb-lg-0 form-textaria">
                            <textarea type="text" name="contenue" id="contenue" class="txt2 px-3 pt-2 frminptstyl"
                                placeholder="문의사항 " required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Ld4wpkqAAAAANXeNAnVChY40IB4GuLEx82sPcAI"
                                data-callback="enableSubmitButton" data-expired-callback="disableSubmitButton"></div>
                            @if ($errors->has('captcha'))
                                <span class="text-danger">{{ $errors->first('captcha') }}</span>
                            @endif
                        </div>
                        <div class="form-group text-lg-right mt-lg-4 button-formulaire">
                            <button type="buttom" class="btn btn-outline-primary button4-cancel m-0 mb-2"
                                onclick="viderchapm()">취소</button>
                            <button type="submit" id="submit-button" class="btn btn-outline-primary button4 m-0  mb-2"
                                disabled>문의하기</button>

                        </div>
                    </form>
                </div>

            </div>
            @if (session('success'))
                <input hidden id="success" value="{{ session('success') }}">
            @else
                <input hidden id="success" value=0>
            @endif


        </div>
    </section>



    <section id="section-8">
        <div class="container">
            <div class=" text-center mb-3 d-flex flex-column align-items-center">
                <h2 class="main-title ">Tunisia in numbers</h2>

                <div class=" buttons" id="s8ssm">
                    <button id='btn0sect5' class="p-2  btnactv1" onclick="changtextSect3(0)">+12 M <br>2023년
                        인구</button>
                    <button id='btn1sect5' class="p-2 btninactv1" onclick="changtextSect3(1)">2M<br>관광객
                        200만명</button>
                    <button id='btn2sect5' class="p-2 btninactv1" onclick="changtextSect3(2)">700<br>역사적인 장소</button>
                    <button id='btn3sect5' class="p-2 btninactv1" onclick="changtextSect3(3)">1<br>1번째 대학</button>
                    <button id='btn4sect5' class="p-2 btninactv1" onclick="changtextSect3(4)">9<br>유네스코 세계유산</button>
                </div>
            </div>
            <div class="d-flex flex-column  align-items-center  allsec">
                <div class="ktbchng text-center">

                    <div class="row">

                        <div class="col-lg-6 ">
                            <img src="{{ asset('images/tmp_1697673169545.jpg') }}" alt="Sun" id="sec3img"
                                class="imgactv">
                        </div>
                        <div
                            class="align-items-start col-lg-6 d-flex flex-column justify-content-around text-alignes  ">
                            <div class="para-section">
                                <p id='sec3titrp5'></p>
                                <p id='sec3spnprt5' class="txtactv">튀니지의 인구는 약 1,200만 명(2023년 기준)이며 국민의 대부분은 튀니지인으로
                                    이루어져있어요. 이 중 이슬람교를 믿는 무슬림은 약 98%를 차지합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--
    <section id="section-8">
        <div class="container">
            <h2 class="main-title text-center">Tunisia in numbers</h2>
            <div class="cardul d-flex justify-content-center gap-2 pb-lg-3" id='btnchng'>
                <button onclick="changContai(1)" class="p-2  btnactv1" data-paragraph="ahla1" id="btn0">
                    <h6 id='tit1' class="tit1actv mt-1">+12 M</h6>
                    <h6 id='tit11' class="tit2actv">2023년 인구</h6>
                </button>
                <button onclick="changContai(2)" class="p-2 btninactv1" data-paragraph="ahla12" id="btn1">
                    <h6 id='tit2' class="tit1inactv">2M</h6>
                    <h6 id='tit22' class="tit2inactv">관광객 200만명</h6>
                </button>
                <button onclick="changContai(3)" class="p-2 btninactv1" data-paragraph="ahla13" id="btn2">
                    <h6 id='tit3' class="tit1inactv">700</h6>
                    <h6 id='tit33' class="tit2inactv">역사적인 장소</h6>
                </button>
                <button onclick="changContai(4)" class="p-2 btninactv1" data-paragraph="ahla14" id="btn3">
                    <h6 id='tit4' class="tit1inactv">1</h6>
                    <h6 id='tit44' class="tit2inactv">1번째 대학</h6>
                </button>
                <button onclick="changContai(5)" class="p-2 btninactv1" data-paragraph="ahla15" id="btn4">
                    <h6 id='tit5' class="tit1inactv">9</h6>
                    <h6 id='tit55' class="tit2inactv">유네스코 세계유산</h6>
                </button>
            </div>
            <div class="card2 pt-3">
                <div class="op ">
                    <div class="text-container">
                        <div class="row flex-lg-row-reverse">
                            <div class="col-lg-5">
                                <p id="txt1" class="txtactv">튀니지의 인구는 약 1,200만 명(2023년 기준)이며 국민의 대부분은 튀니지인으로
                                    이루어져있어요. 이 중 이슬람교를 믿는 무슬림은 약 98%를 차지합니다.</p>
                            </div>
                            <div class="col-lg-7">
                                <img id='img1Cnt' class='imgactv' src="images/tmp_1697673169545.jpg" alt="Peoples">
                            </div>
                        </div>
                    </div>
                    <div class="text-container ">
                        <div class="row">
                            <div class="col-lg-7">
                                <img id='img2Cnt' class='imginactv' src="images/tmp_1697673121691.jpg" alt='Touriste'>
                            </div>
                            <div class="col-lg-5">
                                <p id="txt2" class="txtinactv">2021년 튀니지는 200만 명의 관광객을 맞이하며 관광업에서 상당한 부상을 보였습니다.
                                    아름다운 지중해
                                    해안, 역사적 유산 및 다양한 명소로 전 세계의 방문객들을 끌어들이고 있습니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-container ">
                        <div class="row">
                            <div class="col-lg-7">
                                <img id='img3Cnt' class='imginactv' src="images/tmp_1697673183049.jpg" alt="Historique">
                            </div>
                            <div class="col-lg-5">
                                <p id="txt3" class="txtinactv">튀니지는 다양한 문명을 아우르는 약 700개의 역사적인 장소를 자랑합니다. 고대의
                                    카르타고부터 로마 시대
                                    유적까지, 다양한 문화와 역동적인 역사를 자랑하는 매력적인 관광지로 알려져 있습니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-container ">
                        <div class="row">
                            <div class="col-lg-7">
                                <img id='img4Cnt' class='imginactv' src="images/tmp_1697673154452.jpg" alt="Books">
                            </div>
                            <div class="col-lg-5">
                                <p id="txt4" class="txtinactv">튀니지는 세계 최초의 대학이 있는 특별한 곳입니다. 737년에 설립된 자이투나 대학은
                                    튀니지의 교육
                                    수준과 지적 발전에 대한 헌신을 보여줍니다.</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-container ">
                        <div class="row">
                            <div class="col-lg-7">
                                <img id='img5Cnt' class='imginactv' src="images/UNSCO.png" alt="Usnco">
                            </div>
                            <div class="col-lg-5">
                                <p id="txt5" class="txtinactv">역사적, 문화적 유산이 풍부한 튀니지는 튀니스와 수스의 메디나, 카이로안, 카르타고 유적,
                                    엘젬 원형극장
                                    등 총 9개의 유네스코 세계문화유산을 보유하고 있습니다.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section> --}}

    <footer class="footer">
        <div class=" container">
            <div class="row">
                <div class="col-lg-6 text-lg-end" id='part1'>
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title">튀니지에 대해서</h3>
                        <ul>
                            <li><a href="#">역사</a> |</li>
                            <li><a href="travel-information#Culinary-recomendation">음식</a> |</li>
                            <li><a href="about-tunisia#section-10">문화</a> |</li>
                            <li><a href="/#section-4">목적지</a> |</li>
                            <li><a href="about-tunisia#spotlight-section">활동</a> |</li>
                            <li><a href="about-tunisia#Tunisia-over">경제</a> |</li>
                            <li><a href="#">업적</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title"> 여행 정보</h3>
                        <ul>
                            <li><a href="trip-itinerary#ligne-section3">공항</a> |</li>
                            <li><a href="about-atlantis#ligne-section-5">호텔</a> |</li>
                            <li><a href="about-tunisia#section-1">경제</a> |</li>


                            <li><a href="/#section-7">우리가 도울 수 있는 방법</a> </li>

                        </ul>
                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 ">
                    <div class="d-flex justify-content-center mb-4 gap-lg-5 ml-lg-5">
                        <a href="trip-itinerary#Popular-Tour">
                            <div class="part2">
                                <img src="{{ asset('images/Kasr_Jamm.png') }}" alt="Kasr Il Jamm"
                                    class="object-fit-cover cover-img">
                                <p>목적지</p>
                            </div>
                        </a>
                        <a href="travel-information#Culinary-recomendation">
                            <div class="part2">
                                <img src="{{ asset('images/oja.png') }}" alt="Ojja" class="object-fit-cover">
                                <p>음식</p>
                            </div>
                        </a>
                        <a href="/#section-4">

                        </a>
                    </div>
                    <a href="trip-itinerary#to-main routes">
                        <div class="d-flex justify-content-center mb-4 gap-lg-5 ">
                            <div class="part2">
                                <img src="{{ asset('images/sahraaae.png') }}" alt="Sahara" class="object-fit-cover">
                                <p>활동</p>
                            </div>
                    </a>
                    <a href="about-atlantis#ligne-section-5">
                        <div class="part2">
                            <img src="{{ asset('images/Équipage.png') }}" alt="Équipage"
                                class="object-fit-cover cover-img">
                            <p>호텔과 리조트</p>
                        </div>
                    </a>


                </div>
            </div>

        </div>

        <div class="w-100 mt-3 pt-2 px-0 container" id='part2'>
            <div class="row">
                <div class="text-left col-lg-4 image-footer-1">
                    <img src="{{ asset('images/Rectangle2.svg') }}" alt="Tunisiatrip">
                    <img src="{{ asset('images/Untitled-1.png') }}" class="heightimg" alt="Atlantis voyages">
                    <img src="{{ asset('images/Inspiring_tunisia.png') }}" class="heightimg" alt="Tunisia Inspiring">
                </div>
                <div class="col-lg-4 text-center image-footer-1">
                    <span>All rights reserved ©</span>
                </div>
                <div class="col-lg-4 text-right image-footer-1">
                    <a href="https://www.facebook.com/tunisiatrip.atlantis/" target="_blanc"><img
                            src="{{ asset('images/fb.svg') }}" alt="Facebook"></a>
                    <a href="https://www.instagram.com/tunisiatrip.atlantis/" target="_blanc"><img
                            src="{{ asset('images/ig.svg') }}" alt="Instagramme"></a>
                    <img src="{{ asset('images/yt.svg') }}" id='imgyt'>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="modalemailsucc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="py-5 modal-body text-center">
                    <h2 class="main-title">고객님의 문의가 성공적으로 접수됐습니다.</h2>
                    <p class=" text-center">기재하신 연락처로 곧 답변드리겠습니다.</p>
                    <img src="{{ asset('images/tick.png') }}" class="img-fluid mt-4 img1mod" alt="Carthage">
                    <img src="{{ asset('images/imgmod.png') }}" class="img-fluid img2mod" alt="Carthage">
                    <button id="model-close" type="buttom" class="btn btn-primary btnmodal">Okay, Thanks!</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('js/ScriptPage1.js') }}"></script>
    <script>
        function enableSubmitButton() {
            document.getElementById('submit-button').disabled = false; // Enable the submit button
        }

        function disableSubmitButton() {
            document.getElementById('submit-button').disabled = true; // Disable the submit button
        }
    </script>
    <script type="text/javascript">
        // Code JavaScript pour gérer l'affichage/cachage du menu
        const toggleButton = document.getElementById('toggleButton');
        const navbarNav = document.getElementById('navbarNav');

        toggleButton.addEventListener('click', function () {
            navbarNav.classList.toggle('show');
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#scrollToContact').on('click', function () {
                $('html, body').animate({
                    scrollTop: $('#contact-us-section').offset().top
                }, 'slow');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var windowWidth = $(window).width();
            var windowHeight = $(window).height();

            if (windowWidth === 768 && windowHeight === 1024) {
                $('.slick-slider-visitRev').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true,
                    dots: false,
                    cssEase: 'linear'
                });
            } else if (windowWidth < 1024) {
                $('.slick-slider-visitRev').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: true,
                    dots: false,
                    cssEase: 'linear',
                    responsive: [{
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            dots: false,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]
                });
            }
        });

        $(window).resize(function () {
            var windowWidth = $(window).width();
            var windowHeight = $(window).height();

            if (windowWidth === 768 && windowHeight === 1024) {
                $('.slick-slider-visitRev').slick('unslick');
                $('.slick-slider-visitRev').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true,
                    dots: false,
                    cssEase: 'linear'
                });
            } else if (windowWidth < 1024) {
                $('.slick-slider-visitRev').slick('unslick');
                $('.slick-slider-visitRev').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: true,
                    dots: false,
                    cssEase: 'linear',
                    responsive: [{
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            dots: false,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]
                });
            }
        });
        function handleWindowSizeChange() {
            const windowWidth = window.innerWidth;
            if (windowWidth >= 1024 && windowWidth <= 1028) {
                $('.slick-slider-visitRev').slick('unslick');
                $('.slick-slider-visitRev').slick({
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: true,
                    dots: true,
                    cssEase: 'linear'
                });
            }
        }

        handleWindowSizeChange();
        window.addEventListener('resize', handleWindowSizeChange);
    </script>
    <script>
        $(document).ready(function () {
            if ($(window).width() < 1024) {
                $('.slick-slider-section-3').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,


                    prevArrow: null,
                    nextArrow: null,
                    fade: true,
                    cssEase: 'linear',
                });
            }
        });
    </script>
    <script>
        $(document).ready(function () {

            $('.variable-width').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                cssEase: 'linear',
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });

        });
    </script>
    <script>
        jQuery(document).ready(function () {
            jQuery("#toggleButton").click(function () {
                jQuery(".custom-navbar").toggleClass("toggled");
            });

            var success = document.getElementById('success').value;
            console.log(success);
            if (success == 1) {
                $('#modalemailsucc').modal("show");
                /*  setTimeout(function() {
                     $('#modalemailsucc').modal('hide');
                 }, 3000); */
            }

            $("#model-close").on('click', function () {
                $('#modalemailsucc').modal('hide');
            });

            document.getElementById('paragraph1').style.display = "block";
            document.getElementById('paragraph2').style.display = "none";
            document.getElementById('paragraph3').style.display = "none";
            document.getElementById('paragraph4').style.display = "none";

            $("#btnTunis").on('click', function () {
                $(this).addClass("btnactv");
                $(this).removeClass("btninactv");
                $("#btnSfax").removeClass("btnactv");
                $("#btnSfax").addClass("btninactv");
                $("#btnKairouan").removeClass("btnactv");
                $("#btnKairouan").addClass("btninactv");
                document.getElementById("tunis-weather").style.display = "block";
                document.getElementById("sfax-weather").style.display = "none";
                document.getElementById("kairouan-weather").style.display = "none";
            });
            $("#btnSfax").on('click', function () {
                $(this).addClass("btnactv");
                $(this).removeClass("btninactv");
                $("#btnTunis").removeClass("btnactv");
                $("#btnTunis").addClass("btninactv");
                $("#btnKairouan").removeClass("btnactv");
                $("#btnKairouan").addClass("btninactv");
                document.getElementById("tunis-weather").style.display = "none";
                document.getElementById("sfax-weather").style.display = "block";
                document.getElementById("kairouan-weather").style.display = "none";
            });
            $("#btnKairouan").on('click', function () {
                $(this).addClass("btnactv");
                $(this).removeClass("btninactv");
                $("#btnTunis").removeClass("btnactv");
                $("#btnTunis").addClass("btninactv");
                $("#btnSfax").removeClass("btnactv");
                $("#btnSfax").addClass("btninactv");
                document.getElementById("tunis-weather").style.display = "none";
                document.getElementById("sfax-weather").style.display = "none";
                document.getElementById("kairouan-weather").style.display = "block";
            });

            if (window.location.href.indexOf("#section-7") > -1) {
                console.log("dz");
                $("html,body").animate({
                    scrollTop: 3650
                }, 1000);
            }

        });
    </script>

    <script>
        function toggleNavbarBackground() {
            var body = document.querySelector('body');
            body.classList.toggle('navbar-toggled');
        }
        $('#image-2, #image-3, #image-4, #image-5').on('click', function () {
            if ($(this).find('.parag-img').css('opacity', '0')) {
                $(this).find('.parag-img').css('opacity', '1')
                console.log("h1")
            } else {
                $(this).find('.parag-img').css('opacity', '0');
                console.log("h2")
            }
        })
    </script>
    <script>
        $('#mySlickCarousel .slick-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: null,
            nextArrow: null,
            fade: true,
            cssEase: 'linear',
            appendArrows: $('#mySlickCarousel'),
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth <= 1024) {
                var itemsDiv = document.getElementById('slicksect2');
                if (!itemsDiv.classList.contains('slick-sess2')) {
                    itemsDiv.classList.add('slick-sess2');
                }
            } else {
                var itemsDiv = document.getElementById('items');
                if (itemsDiv.classList.contains('slick-sess2')) {
                    itemsDiv.classList.remove('slick-sess2');
                }
            }
        });
        window.dispatchEvent(new Event('resize'));

        $('#section-2 .slick-sess2').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            infinite: true,
            speed: 500,
            cssEase: 'linear'
        });

        $(document).ready(function () {
            //54it il lien connecter
            var currentURL = window.location.href;
            var parts = currentURL.split('/');
            var routeValue = parts[parts.length - 1];
            var home = document.getElementById('home');
            var aboute = document.getElementById('aboute');
            var aboutatlnts = document.getElementById('aboutatlnts');
            var travel = document.getElementById('travel');
            var more = document.getElementById('dropdownMenuButton');

            console.log(routeValue);
            if (routeValue == '' || routeValue == "#section-7") {
                home.style.color = '#347EFF';
                aboute.style.color = '#000';
                aboutatlnts.style.color = '#000';
                travel.style.color = '#000';
                more.style.color = '#000';
            } else if (routeValue == 'about-tunisia') {
                aboute.style.color = '#347EFF';
                home.style.color = '#000';
                aboutatlnts.style.color = '#000';
                travel.style.color = '#000';
                more.style.color = '#000';
            } else if (routeValue == 'about-atlantis') {
                aboutatlnts.style.color = '#347EFF';
                aboute.style.color = '#000';
                home.style.color = '#000';
                travel.style.color = '#000';
                more.style.color = '#000';
            } else if (routeValue == 'travel-information') {
                travel.style.color = '#347EFF';
                aboute.style.color = '#000';
                aboutatlnts.style.color = '#000';
                home.style.color = '#000';
                more.style.color = '#000';
            } else {
                more.style.color = '#347EFF';
                aboute.style.color = '#000';
                aboutatlnts.style.color = '#000';
                travel.style.color = '#000';
                home.style.color = '#000';
            }
        });
    </script>


</body>

</html>