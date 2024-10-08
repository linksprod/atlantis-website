@include('layouts.front.head')

<body id="Article">
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


    <section id='section-1' class="container">
        <h2 class="main-title text-center mt-lg-4">북아프리카의 진주 ‘튀니지’를 주목하라</h2>
        <h6 class="text-center mb-lg-2">카멜 라가 아틀란티스여행 사장 방한, 세일즈콜</h6>

            <div class="crdsess5  p-lg-5 mt-lg-3">
                <div class="row">
                    <div class="col-lg-6 crdsess5-prt1">
                        <img class='crdsess5-img' src="{{ asset('images/Kamel-Lagha.jpg') }}" alt="Bardo National Museum">
                    </div>
                    <div class="col-lg-6 pl-lg-5 pt-3 crdsess5-prt2">
                        <p class="text-left">
                            북아프리카의 진주이자 모로코와 더불어 한국인 무비자 입국이 가능한 나라 튀지니.</p>
                        <p class="text-left"> 튀니지는 프랑스나 이탈리아, 독일 등 유러피안들에게는 이미 널리 알려진 휴양지이지만 아직 한국에서는 낮선 나라 중 한곳이다.</p>
                        <p class="text-left">   최근 튀니지 탑 여행사인 아틀란티스여행의 라가사장이 방한해 주요여행사 관계자들을 만나 튀니지에 대한 적극적인 홍보에 나서 눈길을 끌었다. 위드코로나로 하나둘씩
                            국경을
                            개방하는 국가들이 늘어나면서 튀니지 역시 한국시장에 적극적으로 노크를 하고 있는 것이다.</p>

                        <p class="text-left"> 라가 사장은 “한국의 주요 여행사 관계자들과 미팅을 통해 튀니지의 우수한 관광자원을 널리 홍보했다”며 “이번 여행사들과의 미팅을 통해
                            유럽을 방문한 경험이
                            있는
                            여행객들을 대상으로 튀니지가 포함된 특별하고 퀄리티 있는 여행 신 상품을 판매 해 줄 것을 요청했고 반응도 좋았다”고 말했다.</p>
                        <p class="text-left"> 이후 한국인 튀니지 방문객이 늘어나게 되면 한국을 자주 방문해 튀니지관광 설명회 및 다양한 이벤트를 통해 잠재력이 풍부한 튀니지
                            여행시장을 한국에 적극 홍보할
                            계획이라고 덧붙였다 ..</p>
                            <p class="text-left">    <사진 출처=세계여행신문DB></p>
                    </div>
                </div>
            </div>



    </section>


</body>
@include('layouts.front.footer')
