@include('page1.script')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobilblog.css') }}">
</head>
<body id="index" class="tunisiatrip">
@include('layouts.front.header')
    <div class="container">
        <section id="section-1" class="section-1">
            <div class="main-img radius-20">
                <div class="text-in-img">
                    <h1 class="col-lg-8">Hear from the Korean Amassador in Tunisia</h1>
                    <p class="col-lg-6">Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus mollis sit aliquam sit
                        nullam neque ultrices.</p>
                    <div class='btns'>
                        <button class="btn radius-20 btn-white mr-lg-3">Play Video
                             <img  src="{{ asset('images/Arrow Right.png') }}"></button>
                        <button class="btn radius-20 btn-transparant">See more like this</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2" class="pt-lg-5 pb-lg-5">
            <div class="items" id="items">
                <span id='itm0' class="item-actv" onclick="changSection6(0)">Popular</span>
                <span id='itm1' class="item-inactv" onclick="changSection6(1)">News</span>
                <span id='itm2' class="item-inactv" onclick="changSection6(2)">Travel Tips</span>
                <span id='itm3' class="item-inactv" onclick="changSection6(3)">Food</span>
                <span id='itm4' class="item-inactv" onclick="changSection6(4)">Life Style</span>
                <span id='itm5' class="item-inactv" onclick="changSection6(5)">Art</span>
                <span id='itm6' class="item-inactv" onclick="changSection6(6)">Knowledge</span>
            </div>
        </section>
        <section id="section-3">
            <div class="row pt-lg-5 pb-lg-3">
                <div class="col-lg-6 pl-lg-5 sect3-partie1">
                    <span>
                        Want to stay up to date with our content? <strong>Subscribe Now!</strong>
                    </span>
                </div>
                <div class="col-lg-6 form-group pb-lg-3 pr-lg-5 section-3-pat2">
                    <div class="row pb-lg-3">
                        <input class="col-lg-9" type="email" class="form-control" aria-describedby="emailHelp"
                            placeholder="Enter your email">

                            <div class="lign-in-sectuion-3-mobil"></div>

                        <button class="btn radius-20 btn-color col-lg-3 btn-subscrib">Suscribe<img
                                src="{{ asset('images/Arrow Right whit.png') }}"></button>
                    </div>
                    <div class="lign-in-sectuion-3"></div>
                    <p>
                        <input class="form-check-input" type="checkbox" value="" checked>
                        Allow us to reach out to you
                    </p>
                </div>


            </div>
        </section>
        <section id="section-4">
            <div class="d-flex justify-content-between pt-lg-5">
                <div class=" patie-1">
                    <h1>Videos from Creators</h1>
                    <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum
                        tempus hac tellus
                        libero</p>
                </div>
                <div>
                    <button class="btn radius-20 btn-color btn-see-more">See More<img
                            src="{{ asset('images/Arrow Right whit.png') }}"></button>
                </div>
            </div>
        </section>

        <section id="section-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="partie-1 radius-20 p-lg-5">
                        <h1 class="col-lg-6">A catchy title for
                            another video</h1>
                        <p class="col-lg-9">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <button class="btn radius-20 btn-white">Play Video <img
                                src="{{ asset('images/Arrow Right.png') }}"></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="partie-2 radius-20 p-5">
                        <h1 class="col-lg-6">A catchy title for
                            another video</h1>
                        <p class="col-lg-9">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.
                        </p>
                        <button class="btn radius-20 btn-color ">Play Video <img
                                src="{{ asset('images/Arrow Right whit.png') }}"></button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-6" class="pt-lg-5">
            <div class="head">
                <h1>
                    Popular Topics
                </h1>
                <p class="col-lg-5 pl-lg-0">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus
                    libero
                </p>
            </div>
            <div class="cards">
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
                <div class="row pt-lg-5">
                    <div class="col-lg-6 pl-lg-5">
                        <img src="{{ asset('images/Container (1).png') }}" class="card-imag">
                    </div>
                    <div class="col-lg-6 description pl-lg-5">
                        <h3>Catchy Title:<br>
                            The main point behind it</h3>
                        <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac
                            tempus enim.</p>
                        <button class="btn radius-20 btn-color col-lg-3">Read Full Article</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-7">
            <div class="pagination  mt-lg-5" id="pagination">
                <a  class="page">1</a>
                <a  class="page active">2</a>
                <a  class="page">3</a>
                <a  class="page">4</a>
                <a  class="page">5</a>
            </div>
        </section>

    </div>
  <footer class="footer" style="display: flex;flex-direction: column;align-items: center;">
        <div class=" container">
            <div class="row">
                <div class="col-lg-6 text-lg-end border-md-right">
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title">튀니지에 대해서</h3>
                        <ul>
                            <li><a href="#">역사</a> |</li>
                            <li><a href="#">음식</a> |</li>
                            <li><a href="#">문화</a> |</li>
                            <li><a href="#">목적지</a> |</li>
                            <li><a href="#">활동</a> |</li>
                            <li><a href="#">경제</a> |</li>
                            <li><a href="#">업적</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="justify-content-center justify-content-lg-end main-title"> 여행 정보</h3>
                        <ul>
                            <li><a href="#">공항</a> |</li>
                            <li><a href="#">호텔</a> |</li>
                            <li><a href="#">통화</a> |</li>
                            <li><a href="#">계절</a></li>
                            <li><a href="#">최고의 제안</a> |</li>
                            <li><a href="#">우리가 도울 수 있는 방법</a> |</li>
                            <li><a href="#">비상</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="d-flex justify-content-evenly mb-4">
                        <img src="{{ asset('images/Group (3).png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group (4).png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 52.png') }}" style="width: 93px; height: 62px;">
                    </div>
                    <div class="d-flex justify-content-evenly mb-4">
                        <img src="{{ asset('images/Group 62.png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 63.png') }}" style="width: 93px; height: 62px;">
                        <img src="{{ asset('images/Group 39589.png') }}" style="width: 93px; height: 62px;">
                    </div>
                </div>
            </div>

        </div>

        <div class="w-100 mt-3 pt-2 px-0 container" style="border-top:1px solid #B3B3B3">
            <div class="row">
                <div class="text-left col-lg-4 image-footer-1">
                    <img src="{{ asset('images/Rectangle2.svg') }}">
                    <img src="{{ asset('images/Untitled-1.png') }}" style="height: 24px;">
                    <img src="{{ asset('images/Inspiring_tunisia.png') }}" style="height: 24px;">
                </div>
                <div class="col-lg-4 text-center image-footer-1">
                    <span>All rights reserved ©</span>
                </div>
                <div class="col-lg-4 text-right image-footer-1">
                    <a href="https://www.facebook.com/tunisiatrip.atlantis/" target="_blanc"><img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;" alt="Facebook"></a>
                    <a href="https://www.instagram.com/tunisiatrip.atlantis/" target="_blanc"><img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;" alt="Instagramme"></a>
                    <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;">
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="modalemailsucc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>E-mail envoyer</p>
                </div>
            </div>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="{{ asset('js/ScriptPage1.js') }}"></script>
    <script type="text/javascript">
        // Code JavaScript pour gérer l'affichage/cachage du menu
        const toggleButton = document.getElementById('toggleButton');
        const navbarNav = document.getElementById('navbarNav');

        toggleButton.addEventListener('click', function() {
            navbarNav.classList.toggle('show');
        });
    </script>
     <script>
        window.addEventListener('resize', function() {
            if (window.innerWidth <= 767) {
                var itemsDiv = document.getElementById('items');
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
        $('.slick-sess2').slick({
            infinite: true,
            slidesToShow: 5,
  slidesToScroll: 5,
            dots: true,
            arrows: false,
            infinite: true,
            speed: 500,
            cssEase: 'linear'
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#toggleButton").click(function() {
                jQuery(".custom-navbar").toggleClass("toggled");
            });

            var success = document.getElementById('success').value;
            console.log(success);
            if (success == 1) {
                $('#modalemailsucc').modal("show");
                setTimeout(function() {
                    $('#modalemailsucc').modal('hide');
                }, 2000);
            }
        });
    </script>
    <script>
        function toggleNavbarBackground() {
            var body = document.querySelector('body');
            body.classList.toggle('navbar-toggled');
        }
        $('#image-2, #image-3, #image-4, #image-5').on('click', function() {
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
            appendArrows: $('#mySlickCarousel'),
        });
    </script>
<script src="{{ asset('js/scriptblog.js') }}"></script>

</body>

</html>
