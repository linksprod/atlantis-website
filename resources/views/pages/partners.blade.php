@include('layouts.front.head')

<body id="partners">
    @include('layouts.front.header')
<main class="container part-1">
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
        <section id='partners-cont'>
            <h2 class="main-title text-center ">Atlantis Partnership</h2>
            <p class="text-partners-cont">아틀란티스는 전 세계 다양한 에이전시와의 파트너십을 통해 한 단계 높은 여행경험을 선사합니다.</p>
            <div id='partnerspartweb'>
                <div class="row" >
                    <div class="col-lg-4">
                        <div class="img p-3">
                            <img src="{{ asset('images/casa-de-una planta-vector.png') }}"
                                alt="Casa de una planta vector">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="img p-3">
                            <img src="{{ asset('images/JSM.png') }}" alt="JSM">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="img p-3">
                            <img src="{{ asset('images/wonderful-tours-laos.png') }}" alt="Wonderful tours laos">
                        </div>

                    </div>
                </div>
            </div>
            <div class="mx-lg-1" id="partnerspartmob">
                        <div class="img p-3">
                            <img src="{{ asset('images/casa-de-una planta-vector.png') }}"
                                alt="Casa de una planta vector" id='img1'>
                        </div>

                        <div class="img p-3">
                            <img src="{{ asset('images/JSM.png') }}" alt="JSM">
                        </div>

                        <div class="img p-3">
                            <img src="{{ asset('images/wonderful-tours-laos.png') }}" alt="Wonderful tours laos">
                        </div>

            </div>
        </section>



    @include('layouts.front.footer')
    <script>
        $('#partnerspartmob').slick({
             infinite: true,
             slidesToShow: 1,
             slidesToScroll: 1,
             dots: true,
             arrows: false,
             infinite: true,
             speed: 500,
             cssEase: 'linear'
         });
 </script>
