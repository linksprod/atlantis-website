$('.list-culinary-card').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.list-museums-card').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
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

$('.list-souvenir-card').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.wrap-nav-transportation .nav-tabs li').on('click', function () {
    $('.wrap-nav-transportation .nav-tabs li').removeClass('active');
    $(this).addClass('active');
});

//dropdown show
var dropdown = document.getElementById('dropdownMenuButton');

dropdown.onclick = function () {
  var dropdownMenu = document.querySelector('.dropdown-menu');
    var hasShowClass = dropdownMenu.classList.contains('show');
    if (hasShowClass) {
        dropdownMenu.classList.remove('show');
    } else {
        dropdownMenu.classList.add('show');
    }
};


window.addEventListener('resize', function() {
    var itemsDiv = document.getElementById('btns');
    var crdssess5 = document.getElementById('crdssess5');

    if (window.innerWidth <= 767) {
        if (!itemsDiv.classList.contains('slick-sess3')) {
            itemsDiv.classList.add('slick-sess3');
        }
        if (!crdssess5.classList.contains('slick-sess5')) {
            crdssess5.classList.add('slick-sess5');
        }
    } else {
        if (itemsDiv.classList.contains('slick-sess3')) {
            itemsDiv.classList.remove('slick-sess3');
        }
        if (!crdssess5.classList.contains('slick-sess5')) {
            crdssess5.classList.remove('slick-sess5');
        }
    }
});
window.dispatchEvent(new Event('resize'));
$('.slick-sess3').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('.slick-sess5').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});
