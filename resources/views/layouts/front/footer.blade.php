<footer class="footer" style="display: flex;flex-direction: column;align-items: center;">
    <div class=" container">
        <div class="row">
            <div class="col-lg-6 text-lg-end border-md-right">
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
                    <div class="part2 ">
                        <img src="{{ asset('images/Kasr_Jamm.png') }}" alt="Kasr Il Jamm" class="object-fit-cover cover-img" >
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
                        <img src="{{ asset('images/Équipage.png') }}" alt="Équipage" class="object-fit-cover cover-img" >
                        <p>호텔과 리조트</p>
                    </div>
                </a>


            </div>
        </div>

    </div>

    <div class="w-100 mt-3 pt-2 px-0 container" style="border-top:1px solid #B3B3B3">
        <div class="row">
            <div class="text-left col-lg-4 image-footer-1">
                <img src="{{ asset('images/Rectangle2.svg') }}" alt="Tunisia Trip">
                <img src="{{ asset('images/Untitled-1.png') }}" style="height: 24px;" alt="Atlantis Voyage">
                <img src="{{ asset('images/Inspiring_tunisia.png') }}" style="height: 24px;" alt="Inspiring Tunisia">
            </div>
            <div class="col-lg-4 text-center image-footer-1">
                <span>All rights reserved ©</span>
            </div>
            <div class="col-lg-4 text-right image-footer-1">
                <a href="https://www.facebook.com/tunisiatrip.atlantis/" target="_blanc"><img src="{{ asset('images/fb.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;" alt="Facebook"></a>
                <a href="https://www.instagram.com/tunisiatrip.atlantis/" target="_blanc"><img src="{{ asset('images/ig.svg') }}" style="height: 18px; max-width: 17px; margin-right: 4%;" alt="Instagramme"></a>
                <img src="{{ asset('images/yt.svg') }}" style="height: 18px; max-width: 26px;" alt="Youtyoub">
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

<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{ asset('js/subpage.js') }}"></script>
<script src="{{ asset('js/blogpage.js') }}"></script>
<script src="{{ asset('js/atlantis.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{--<script src="{{ asset('js/ScriptPage1.js') }}"></script>--}}
<script type="text/javascript">
    // Code JavaScript pour gérer l'affichage/cachage du menu
    const toggleButton = document.getElementById('toggleButton');
    const navbarNav = document.getElementById('navbarNav');

    toggleButton.addEventListener('click', function() {
        navbarNav.classList.toggle('show');
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

     /* navbar */
     function updateClock() {
            const tunisTime = new Date();

            let hours = tunisTime.getHours();
            const minutes = tunisTime.getMinutes();
            const seconds = tunisTime.getSeconds();

            let amOrPm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12;

            const timeString =
                `${(hours < 10 ? '0' : '') + hours}:${(minutes < 10 ? '0' : '') + minutes}:${(seconds < 10 ? '0' : '') + seconds} ${amOrPm}`;

            const tunisTimeElement = document.getElementById("tunis-time");
            if (tunisTimeElement) {
                tunisTimeElement.textContent = timeString;
            }
        }

        updateClock();

        setInterval(updateClock, 1000);

        /* icons */
        function changeImage(isMouseOver, id) {
            var imgId = 'img' + id;
            var pId = 'p' + id;
            var img = document.getElementById(imgId);
            var p = document.getElementById(pId);
            var src;
            if (isMouseOver) {
                src = "../images/Icon_" + id + "_First_Animation.gif";
                p.style.fontWeight = 'bolder';
            } else {
                src = "../images/Icon_" + id + "_Second_Animation.gif";
                p.style.fontWeight = '';
            }
            img.src = src;
        }


        $(document).ready(function() {
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
        if (routeValue == '') {
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
            var sub = document.getElementById('sub');
            var blog = document.getElementById('blog');
            var part = document.getElementById('part');
            if (routeValue == 'trip-itinerary') {
                sub.style.color = '#347EFF';
                blog.style.color = '#000';
                part.style.color = '#000';
            } else if (routeValue == 'blog-page') {
                blog.style.color = '#347EFF';
                sub.style.color = '#000';
                part.style.color = '#000';
            } else if (routeValue == 'partners') {
                part.style.color = '#347EFF';
                blog.style.color = '#000';
                sub.style.color = '#000';
            }
        }
    });
</script>

</body>
