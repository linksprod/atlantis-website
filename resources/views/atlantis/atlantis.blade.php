@include('layouts.front.head')
<meta name="description"
    content="튀니지에서 가장 유명한 여행사인 아틀란티스 여행사를 소개합니다. 아틀란티스 여행사에 대한 간략한 설명과 함께 아틀란티스가 제공하는 차량 서비스, 호텔 및 게스트하우스 정보를 안내합니다.">
<meta name="keywords"
    content="아틀란티스 여행사

    CWT

    튀니지 여행사

    튀니지 여행

    튀니지 차량

    차량 서비스

    튀니지 호텔

    튀니지 리조트

    튀니지 게스트하우스

    호텔">
</head>

<body id="page-atlantis" class="tunisiatrip">
    {{-- nav bar --}}
    @include('layouts.front.header')
    <div class="container mt-5">
        {{-- icons --}}
        <main>
            <div class="flex-container pt-5 sessicn">
                <a href="about-atlantis#ligne-section-5">
                    <div class="icns" onmouseenter="changeImage(true,1)" onmouseleave="changeImage(false,1)">
                        <img id='img1' src="{{ asset('images/Icon_1_Second_Animation.gif') }}" class="imgicns">
                        <p id="p1" class="txticns">호텔</p>
                    </div>
                </a>
                <div class=" ligne1 m-4 lg">|</div>
                <a href="trip-itinerary#ligne-section3">
                    <div class="icns" onmouseenter="changeImage(true,2)" onmouseleave="changeImage(false,2)"><img
                            id='img2' src="{{ asset('images/Icon_2_Second_Animation.gif') }}" class="imgicns">
                        <p id="p2" class="txticns">항공편</p>
                    </div>
                </a>
                <div class="ligne1 m-4 lg">|</div>
                <a href="travel-information#p3-section5">
                    <div class="icns" onmouseenter="changeImage(true,3)" onmouseleave="changeImage(false,3)"><img
                            id='img3' src="{{ asset('images/Icon_3_Second_Animation.gif') }}" class="imgicns">
                        <p id="p3" class="txticns">축제</p>
                    </div>
                </a>
                <div class="ligne1 m-4 lg">|</div>
                <a href="about-tunisia#ligne-section9">
                    <div class="icns" onmouseenter="changeImage(true,4)" onmouseleave="changeImage(false,4)"><img
                            id='img4' src="{{ asset('images/Icon_4_Second_Animation.gif') }}" class="imgicns">
                        <p id="p4" class="txticns">활동</p>
                    </div>
                </a>
                <div class="ligne1 m-4 lg">|</div>
                <a href="about-atlantis#to-section-4">
                    <div class="icns" onmouseenter="changeImage(true,5)" onmouseleave="changeImage(false,5)"><img
                            id='img5' src="{{ asset('images/Icon_5_Second_Animation.gif') }}" class="imgicns">
                        <p id="p5" class="txticns">자동차 서비스</p>
                    </div>
                </a>
                <div class="ligne1 m-4 lg">|</div>
                <a href="trip-itinerary#Popular-Tour">
                    <div class="icns" onmouseenter="changeImage(true,6)" onmouseleave="changeImage(false,6)"><img
                            id='img6' src="{{ asset('images/Icon_6_Second_Animation.gif') }}" class="imgicns">
                        <p id="p6" class="txticns">크루즈</p>
                    </div>
                </a>
                <div class="ligne1 m-4 lg">|</div>
                <a href="travel-information#p3-section4">
                    <div class="icns" onmouseenter="changeImage(true,7)" onmouseleave="changeImage(false,7)"><img
                            id='img7' src="{{ asset('images/Icon_7_Second_Animation.gif') }}" class="imgicns">
                        <p id="p7" class="txticns">박물관</p>
                    </div>
                </a>
            </div>
        </main>
        {{-- section 1 --}}
        <section id="section-1">
            <div class="text-center city-top">
                <h2 class="main-title mt-lg-5">Atlantis agency</h2>
            </div>
            <div class="card card-session1 radius-20 ">
                <div class="card-body mr-0 py-lg-4 row  w-100">
                    <div class="col-lg-5 h-100 pr-lg-5">
                        <div class="d-flex justify-content-center pb-3 pt-2">
                            <img src="{{ asset('images/Atlantis_logo_temporary.svg') }}" class="w-100 mr-3"
                                alt="Atlantis Logo" id='logoat'>
                            <div class="separator"></div>
                            <img src="{{ asset('images/CWT_Logo_Vector.svg') }}" class="img-fluid ml-3 mt-3"
                                alt="CWT" id="logCWT">
                        </div>


                        <p class="mb-lg-4 pt-lg-3">
                            아틀란티스 여행사는 1991년에 시작하여,
                            현재 한국을 포함해 아시아 및 유럽 각지의 여행사들과
                            협력하여 일하고 있습니다.</p>

                        <p class="mb-lg-4">2006년부터는 전 세계 150여 개국의 글로벌 네트워크를 보유한 글로벌 No.1 비즈니스 트래블 매니지먼트 기업인
                            칼슨 와곤릿 트래블(CWT) <br>튀니지 지사를 담당하고
                            있기도 합니다.</p>

                        <p class="mb-lg-4">기업의 출장 규정에 적합한 트래블 컨설팅을 통해
                            효율적인 프로그램을<br> 제안하고 있어요.
                            매년 아틀란티스를 통해 튀니지를 찾는 관광객은
                            늘어나고 있습니다.</p>

                        <p class="mb-lg-4"> 명실상부 튀니지를 대표하는 여행사인 아틀란티스와
                            튀니지 곳곳을 탐험해 보시는 건 어떨까요?</p>
                    </div>
                    <div class="col-lg-7 h-100 card-session4-cnt-imgs px-0 AT-SS-S1">
                        <img src="{{ asset('images/Atlantis-Space.jpg') }}" class=" w-100 imgsess4 radius-20"
                            class="imgsess1kb" alt="Atlantis Space">
                        <img src="{{ asset('images/Teems-Atlantis.jpg') }}" class=" w-100 imgsess4 radius-20"
                            class="imgsess1kb" alt="Teems Atlantis">
                        <img src="{{ asset('images/Bureau-Atlantis.jpg') }}" class=" w-100 imgsess4 radius-20"
                            class="imgsess1kb" alt="Bureau Atlantis">
                    </div>
                </div>
            </div>
        </section>



        {{-- section 2 --}}
        <section id="section-2">
            <div class="text-center">
                <h2 class="main-title mt-lg-5">A Message From our CEO</h2>
            </div>
            <div class="card-session2  radius-20 ">
                <div class=" row mx-0  p-4 my-0 w-100">
                    <div class="col-lg-6 sect2-prt1 px-0 h-100 p-lg-3">
                        <img src="{{ asset('images/Kamel-Lagha.jpg') }}" class="w-100 h-100 radius-20"
                            alt='Kamel Lagha'>
                    </div>
                    <div class="col-lg-6 h-100 py-3 pl-lg-5 sect2-prt2 ">
                        <h2 class="sub-title mb-lg-3">"튀니지로 여러분을 초대합니다"</h2>

                        <p class="m-0 pt-lg-5 pt-3 txt">반갑습니다,</p>
                        <p class="m-0 txt">튀니지 아틀란티스 여행사 대표 카멜 라가입니다.</p>
                        <p class="m-0 txt">유구한 역사와 친절한 사람들로 유명한 튀니지로 여러분을 초대합니다.</p>
                        <p class="m-0 txt">튀니지는 프랑스 및 이탈리아에 인접하여,
                            아프리카와 유럽을 이어주는 다리 역할을 하고 있습니다.</p>
                        <p class="m-0 txt">아틀란티스는 진실한 마음과 오랜 경험을 토대로
                            튀니지의 아름다운 자연환경과 깊은 역사, 역동적인 현재를 넘나드는
                            최고의 여행을 안내해 드립니다.</p>
                        <p class="m-0 txt">곧 아름다운 튀니지에서 여러분을 만날 수 있기를 기대합니다.</p>
                        <h5 class="sub-sub-title pt-lg-4">카멜 라가,</h5>
                        <p class="txt">아틀란티스 여행사 대표</p>

                    </div>
                </div>
            </div>
        </section>



        {{-- section 3 --}}
        <section id="section-3">
            <div class="text-center">
                <h2 class="main-title mt-lg-5">Meet our Team Members</h2>
            </div>
            <div class="row session3-slick-web">
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Kamel.png') }}" class="imgface" alt="Kamel Lagha">
                        <h2 class="sub-title">카멜 라가 </h2>
                        <h2 class="sub-title">Kamel Lagha</h2>
                        <p>CEO of the agency</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-2 "><img
                                src="{{ asset('images/emil.png') }}" alt="Email"
                                class="pr-2"><span>Kamel@atlantis.tn</span>
                        </div>
                    </div>
                </div>
                <div class="card card-session3  col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Heidi.png') }}" class="imgface" alt="Heidi Jung">
                        <h2 class="sub-title">정지혜</h2>
                        <h2 class="sub-title">Heidi Jung</h2>
                        <p>Korean department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-2"><img
                                src="{{ asset('images/emil.png') }}" alt="Email" class="pr-2">
                            <span>jh.heidi.j@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/Mariem.png') }}" class="imgface" alt="Meriem Zoghlami">
                        <h2 class="sub-title">마리엠 조그라미</h2>
                        <h2 class="sub-title">Meriem Zoghlami</h2>
                        <p>Executive management</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-2"><img
                                src="{{ asset('images/emil.png') }}" alt="Email"
                                class="pr-2"><span>contact@atlantis.tn</span>
                        </div>
                    </div>
                </div>
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center ">
                        <img src="{{ asset('images/dunno.png') }}" class="imgface" alt="Sonia Ben Amor">
                        <h2 class="sub-title">소니아 벤 아모르 </h2>
                        <h2 class="sub-title">Sonia Ben Amor</h2>
                        <p>Tiketing Department</p>
                        <div class="d-flex align-items-center justify-content-center mt-lg-2"><img
                                src="{{ asset('images/emil.png') }}" alt="Email">
                            <span>Sonia.Benamor@atlantis.tn</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row session3-slick-mobile">
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center p-3 ">
                        <img src="{{ asset('images/Kamel.png') }}" class="imgface">
                        <h2 class="sub-title p-1">카멜 라가 </h2>
                        <h2 class="sub-title p-1">Kamel Lagha</h2>
                        <p class="p-1 mb-0">CEO of the agency</p>
                        <div class="d-flex align-items-center justify-content-center "><img
                                src="{{ asset('images/emil.png') }}" alt="Email" class="pr-2"><span
                                id='crd1eml'>Kamel@atlantis.tn</span></div>
                    </div>
                </div>
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center p-3">
                        <img src="{{ asset('images/Heidi.png') }}" class="imgface">
                        <h2 class="sub-title p-1">정지혜</h2>
                        <h2 class="sub-title p-1">Heidi Jung</h2>
                        <p class="p-1 mb-0">Korean department</p>
                        <div class="d-flex align-items-center justify-content-center "><img
                                src="{{ asset('images/emil.png') }}" alt="Email" class="pr-2">
                            <span>jh.heidi.j@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center p-3 ">
                        <img src="{{ asset('images/Mariem.png') }}" class="imgface">
                        <h2 class="sub-title p-1">마리엠 조그라미</h2>
                        <h2 class="sub-title p-1">Meriem Zoghlami</h2>
                        <p class="p-1 mb-0">Executive management</p>
                        <div class="d-flex align-items-center justify-content-center"><img
                                src="{{ asset('images/emil.png') }}" alt="Email"
                                class="pr-2"><span>atlantis@atlantis.tn</span>
                        </div>
                    </div>
                </div>
                <div class="card card-session3   col-lg-3">
                    <div class="card-body  row radius-20 text-center p-3">
                        <img src="{{ asset('images/dunno.png') }}" class="imgface">
                        <h2 class="sub-title p-1">소니아 벤 아모르 </h2>
                        <h2 class="sub-title p-1">Sonia Ben Amor</h2>
                        <p class="p-1 mb-0">Tiketing Department</p>
                        <div class="d-flex align-items-center justify-content-center "><img
                                src="{{ asset('images/emil.png') }}" alt="Email">
                            <span>Sonia.Benamor@atlantis.tn</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div id="to-section-4"></div>


        {{-- section 4 --}}
        <section id="section-4" class="mt-lg-5">
            <div class="text-center">
                <h2 class="main-title mt-lg-5">Car services</h2>
            </div>
            <div class="col-12 d-flex justify-content-center button1 mt-lg-3">
                <button id='choix0' class="p-2  btnactv" onclick="chngcontsess4(0)">Car</button>
                <button id='choix1' class="p-2 btninactv" onclick="chngcontsess4(1)">Mini-Bus</button>
                <button id='choix2' class="p-2 btninactv" onclick="chngcontsess4(2)">Bus</button>
                <button id='choix3' class="p-2 btninactv" onclick="chngcontsess4(3)">Van</button>
            </div>
            <div class="card card-session4-cnt radius-20  p-lg-5 mt-3">
                <div class="card-body  row w-100">
                    <div class="col-lg-5 pr-lg-5" id='s4prttxt'>
                        <input hidden value=0 id='numcrd'>
                        <p class="mb-lg-4 psess4" id="psess4">고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다.

                            공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로 여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다.<br>

                            포함사항
                            - 운전기사 이용 요금, 주차비, 연료비, 통행료<br>

                            불포함사항
                            - 투어 가이드, 개인 여행자 보험</p>
                        <h5 class="sub-sub-title" id='h1sess4'>places 1-4</h5>
                        <h5 class="sub-sub-title" id='h2sess4'>Fee 상담 후 메일 안내</h5>
                    </div>

                    <div class="col-lg-7 h-100 card-session4-cnt-imgs px-0 " id='PAS4I1'>
                        <img src="{{ asset('images/Car.jpg') }}" class=" w-100 imgsess4 radius-20" alt="Car">

                    </div>
                    <div class="col-lg-7 card-session4-cnt-imgs px-0 " id='PAS4I2'>
                        <img src="{{ asset('images/Mini-bus-2.jpg ') }}" class=" imgsess4 radius-20" alt="Car">
                        <img src="{{ asset('images/Mini-bus-3.jpg') }}" class=" w-100 imgsess4 radius-20"
                            alt="Car">
                        <img src="{{ asset('images/Mini bus 5.jpg') }}" class=" w-100 imgsess4 radius-20"
                            alt="Car">

                    </div>

                </div>
            </div>
        </section>
        <div id="ligne-section-5"></div>

        {{-- section 5 --}}
        <section id="section-5">
            <div class="text-center ">
                <h2 class="main-title mt-lg-5">Hotels & Resorts</h2>
            </div>
            <div class="row sess5-crds  session5-slick-web" id='sess5-crds'>
                <div class="col-lg-3  sess5crd radius-20">
                    <a id="sess5crd1href" href="https://www.fourseasons.com/tunis/">
                        <div class="mask-image">
                            <img id='sess5crd1img' src="{{ asset('images/Four-Seasons-Tunis.jpeg') }}"
                                class="img-fluid" alt="Four Seasons Tunis">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd1p">Tunis, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd1h2" class="sub-title sess5h2">Four Seasons Tunis</h2>
                    </a>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <a id="sess5crd2href" href="https://www.anantara.com/en/sahara-tozeur">
                        <div class="mask-image">
                            <img id='sess5crd2img' src="{{ asset('images/Anantara-Tozeur.jpeg') }}"
                                class="img-fluid" alt="Anantara Tozeur">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd2p"> TOZEUR, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd2h2" class="sub-title sess5h2">Anantara Tozeur</h2>
                    </a>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <a id="sess5crd3href"
                        href="https://movenpick.accor.com/fr/africa/tunisia/sousse/hotel-sousse.html">
                        <div class="mask-image">
                            <img id='sess5crd3img' src="{{ asset('images/Movenpick-Sousse.jpeg') }}"
                                class="img-fluid" alt="Movenpick Sousse">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd3p"> SOUSSE, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd3h2" class="sub-title sess5h2">Movenpick Sousse</h2>
                    </a>
                </div>
                <div class="col-lg-3  sess5crd radius-20">
                    <a id="sess5crd4href" href="https://www.residencetunis.com/fr/">
                        <div class="mask-image">
                            <img id='sess5crd4img' src="{{ asset('images/The-Residence-Tunis.jpeg') }}"
                                class="img-fluid" alt="The Residence Tunis">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd4p"> TUNIS, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd4h2" class="sub-title sess5h2">The Residence Tunis</h2>
                    </a>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <a id="sess5crd5href" href="https://www.goldenyasmin.com/fr/">

                        <div class="mask-image">
                            <img id='sess5crd5img' src="{{ asset('images/Le-Kasbah-Kairouan.jpeg') }}"
                                class="img-fluid" alt="Le Kasbah Kairouan">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd5p"> KAIROUAN, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd5h2" class="sub-title sess5h2">Le Kasbah Kairouan</h2>
                    </a>
                </div>
                <div class="col-lg-3 sess5crd radius-20">
                    <a id="sess5crd6href" href="https://www.facebook.com/reservationpansy/">
                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Pansy-KSAR-Ghilene.jpeg') }}"
                                class="img-fluid" alt="Pansy KSAR Ghilene">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p"> Douz, Tunisia</p>
                        </div>
                        <div class="note tret">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>

                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Pansy KSAR Ghilene</h2>
                    </a>
                </div>

            </div>
            <div class="row sess5-crds  session5-slick-mobile">
                <div class="col-lg-3  sess5crd radius-20">
                    <a href="https://www.fourseasons.com/tunis/">
                        <div class="mask-image">
                            <img id='sess5crd1img' src="{{ asset('images/Four-Seasons-Tunis.jpeg') }}"
                                class="img-fluid" alt="Four Seasons Tunis">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd1p">HAMMAMET, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd1h2" class="sub-title sess5h2">Four Seasons Tunis</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://www.anantara.com/en/sahara-tozeur">
                        <div class="mask-image">
                            <img id='sess5crd2img' src="{{ asset('images/Anantara-Tozeur.jpeg') }}"
                                class="img-fluid" alt="Anantara Tozeur">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd2p"> TOZEUR, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd2h2" class="sub-title sess5h2">Anantara Tozeur</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://movenpick.accor.com/fr/africa/tunisia/sousse/hotel-sousse.html">

                        <div class="mask-image">
                            <img id='sess5crd3img' src="{{ asset('images/Movenpick-Sousse.jpeg') }}"
                                class="img-fluid" alt="Movenpick Sousse">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd3p"> SOUSSE, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd3h2" class="sub-title sess5h2">Movenpick Sousse</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess5crd radius-20">
                    <a href="https://www.residencetunis.com/fr/">

                        <div class="mask-image">
                            <img id='sess5crd4img' src="{{ asset('images/The-Residence-Tunis.jpeg') }}"
                                class="img-fluid" alt="The Residence Tunis">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd4p"> TUNIS, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd4h2" class="sub-title sess5h2">The Residence Tunis</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://www.goldenyasmin.com/fr/">

                        <div class="mask-image">
                            <img id='sess5crd5img' src="{{ asset('images/Le-Kasbah-Kairouan.jpeg') }}"
                                class="img-fluid" alt="Le Kasbah Kairouan">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd5p"> KAIROUAN, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd5h2" class="sub-title sess5h2">Le Kasbah Kairouan</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://www.facebook.com/reservationpansy/">
                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Pansy-KSAR-Ghilene.jpeg') }}"
                                class="img-fluid" alt="Pansy KSAR Ghilene">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p"> TUNIS, Tunisia</p>
                        </div>
                        <div class="note tret">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Pansy KSAR Ghilene</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://www.radissonhotels.com/fr-fr/hotels/radisson-sfax">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Radisson-Sfax.jpeg') }}" class="img-fluid"
                                alt="Radisson Sfax">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p"> Sfax, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Radisson Sfax</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://sheraton.hammamet-hotels-tn.com/fr/">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Sheraton.jpeg') }}" class="img-fluid"
                                alt="Sheraton">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p"> Hammamet, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Sheraton</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://hotel-africa-tunis.h-rez.com/">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Africa.jpeg') }}" class="img-fluid"
                                alt="Africa">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p">Tunis, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Africa</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://movenpick.accor.com/en/africa/tunisia/tunis/hotel-du-lac-tunis.html">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Movenpick-Lac-2.jpeg') }}"
                                class="img-fluid" alt="Movenpick Lac 2">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p">Tunis, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Movenpick Lac 2</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://www.elmouradi.com/">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/Mouradi-gammarth-2.jpeg') }}"
                                class="img-fluid" alt="Mouradi Gammarth">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p">Tunis, Tunisia</p>
                        </div>
                        <div class="note">
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                            <img src="{{ asset('images/review_Star.svg') }}" alt='star'>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Mouradi Gammarth</h2>
                    </a>
                </div>

                <div class="col-lg-3 sess5crd radius-20">
                    <a href="https://camp-mars.com/">

                        <div class="mask-image">
                            <img id='sess5crd6img' src="{{ asset('images/mars2.jpg') }}" class="img-fluid"
                                alt="Camp Mars">
                        </div> <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue'
                            class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p id="sess5crd6p">Douz, Tunisia</p>
                        </div>
                        <h2 id="sess5crd6h2" class="sub-title sess5h2">Camp Mars</h2>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5 sccgrp">
                <a class="carousel-control-prev flch" role="button" data-slide="prev" onclick="srllcrdssess5(-1)">
                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <span id='crcl1sess5'></span>
                <span id='crcl2sess5'></span>
                <a class="carousel-control-next flch" role="button" data-slide="next" onclick="srllcrdssess5(1)">
                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>



        {{-- section 6 --}}
        <section id="section-6">
            <div class="text-center ">
                <h2 class="main-title mt-lg-5">Guest houses</h2>
            </div>
            <div class="row sess6-crds session6-slick-web mb-5" id="sess6-crds">
                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://darbengacem.com/" id="sess6crd1href">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_bel_gesem.jpg') }}"
                                class="img-fluid" alt="Dar Ben Gacem">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Medina of Tunis</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Ben Gacem </h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://darfatma.com/" id="sess6crd2href">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_fatma.jpg') }}" class="img-fluid"
                                alt="Sidi bou said">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2" alt="">
                            <p>Sidi bou said</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Fatma</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://www.darellamma.com/" id="sess6crd3href">

                        <div class="mask-image">
                            <img class="sess6crdimg"
                                src="{{ asset('images/guesthouse-_bizerte-_dar_Ellamma.jpg') }}" class="img-fluid"
                                alt="Dar ellamma">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Bizerte, tunisia</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar ellamma</h2>
                    </a>
                </div>

            </div>
            <div class="row sess6-crds session6-slick-mobile">
                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://darbengacem.com/">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_bel_gesem.jpg') }}"
                                class="img-fluid" alt="Dar Belgecem">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Medina of Tunis</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Ben Gacem </h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://darfatma.com/">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_fatma.jpg') }}" class="img-fluid"
                                alt="Dar Fatma">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Sidi bou said</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Fatma</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://www.darellamma.com/">

                        <div class="mask-image">
                            <img class="sess6crdimg"
                                src="{{ asset('images/guesthouse-_bizerte-_dar_Ellamma.jpg') }}" class="img-fluid"
                                alt="Carthage">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Bizerte, tunisia</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar ellamma</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">

                    <a href='about:blank'>

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_antonia.jpg') }}" class="img-fluid"
                                alt="Dar Antonia">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Médina de Sousse</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Antonia</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://www.diarhabibi.com/">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/diar-abou-habibi.jpg') }}"
                                class="img-fluid" alt="Diar Abou Habibi">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Tozeur</p>
                        </div>

                        <h2 class="sub-title sess6h2">Diar Abou Habibi</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="http://www.darsaidabeya.com/">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_saida_baya.jpg') }}"
                                class="img-fluid" alt="Dar Saida Baya">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Tozeur</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Saida Baya</h2>
                    </a>
                </div>

                <div class="col-lg-3  sess6crd radius-20">
                    <a href="https://www.facebook.com/dar.dhiafa/">

                        <div class="mask-image">
                            <img class="sess6crdimg" src="{{ asset('images/dar_dhiafa.jpg') }}" class="img-fluid"
                                alt="Dar Dhiafa">
                        </div>
                        <img src="{{ asset('images/sess6crd1crcl.png') }}" alt='cercle blue' class="cercle-img">
                        <p class="text-img">링크</p>
                        <div class="posit">
                            <img src="{{ asset('images/gps.png') }}" alt='gps' class="mr-2">
                            <p>Djerba</p>
                        </div>

                        <h2 class="sub-title sess6h2">Dar Dhiafa</h2>
                    </a>
                </div>

            </div>
            <div class="d-flex justify-content-center mt-5 sccgrp mb-5 scrllsess6">
                <a class="carousel-control-prev flch" role="button" data-slide="prev"
                    onclick="PAsrllcrdssess6(-1)">
                    <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <span id='PAcrcl1sess6'></span>
                <span id='PAcrcl2sess6'></span>
                <span id='PAcrcl3sess6'></span>
                <a class="carousel-control-next flch" role="button" data-slide="next" onclick="PAsrllcrdssess6(1)">
                    <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
    </section>

    </div>
    @include('layouts.front.footer')

    </html>
