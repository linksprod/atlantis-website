$('#section3 .slick-section3-web').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('#section3 .slick-section3-mobil').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('#section4 .slick-section4').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('#section6 .section6-slick').slick({
    infinite: false,
    speed: 600,
    slidesToShow: 3,
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

// Section 5
$(document).ready(function () {
    let firstLongContent = $('.wrap-trips-routes .wrap-single-zone.zone-tunis').find('.zone-long-description').html();
    $('.wrap-trips-routes-infos .content').html(firstLongContent);

    $('.wrap-trips-routes .img-container .wrap-single-zone').on('click', function (e) {
        e.preventDefault();
        let longDescriptionZone = $(this).find('.zone-long-description').html();
        $('.wrap-trips-routes-infos .content').html(longDescriptionZone);
    }).on('mouseenter', function (e) {
        let position = $(this);
        $('.wrap-trips-routes .wrap-single-zone').css('z-index', '2');
        position.css('z-index', '9');
    });

    if (isMobileDevice()) {
        $('.wrap-single-zone').on('click', () => {
            scrollToDescriptionSection();
        });
    }

    function scrollToDescriptionSection() {
        // Animation de défilement vers la deuxième section
        $('html, body').animate({
            scrollTop: $('#sectionDescription').offset().top - 60
        }, 600); // La durée de l'animation en millisecondes (ajustez selon vos besoins)
    }
    // Mobile device detection //TODO : deplacer cette fonction dans le js general du site
    function isMobileDevice() {
        // Responsive design check
        const isResponsive = $(window).width() <= 767;

        // User agent check
        const isUserAgentMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // Combine the checks based on your specific requirements
        return isResponsive || isUserAgentMobile;
    }
});
// JavaScript pour afficher/masquer les descriptions lorsque le bouton est cliqué
const images = document.querySelectorAll('.image1-2');
const buttons = document.querySelectorAll('.btn');

buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
        if (images[index].style.display === 'none') {
            images[index].style.display = 'block';
        } else {
            images[index].style.display = 'none';
        }
    });
});

var indimgsess4 = 0;
function ChangImgSess4(x){
    if (x == -1 && indimgsess4 > 0) {
        indimgsess4--;
    } else if (x == 1 && indimgsess4 < 14) {
        indimgsess4++;
    } else if (x == -1 && indimgsess4 == 0) {
        indimgsess4 = 14;
    } else {
        indimgsess4 = 0;
    }

    var img = ["../images/Tunsi_medina-Tunisatrip.png",
        "../images/Archaeological_Museum_of_Sousse_Tunisiatrip.png",
        "../images/Djerba_Sidi_Jmour_mosque_tunisiatrip.png",
        "../images/Dougga_Tunisiatrip.png",
        "../images/Djerba-beach_tunisiatrip.png",
        "../images/douz_sahara_tunisiatrip.png",
        '../images/Kerkennah_Sunset_tunisaitrip.png',
        '../images/matmata_tunisiatrip.png',
        '../images/sahara_tunisiatrip.png',
        "../images/sousse-ribat.png",
        "../images/Sousse-tunisiatrip.png",
        '../images/star_wars_touzer_-_tunisiatrip.png',
        "../images/starwars_tatouine-tunisa-tunisiatrip.png",
        '../images/Tunisiatrip_Amphitheatre_el_djem.png',
        '../images/tamerza-oasis-tunisiatrip.png'
    ];

    var alt = ['Tunsi medina', 'Archaeological Museum of Sousse', 'Djerba Sidi Jmour mosque', 'Dougga Tunisiatrip','Djerba beach','Douz sahara','Kerkennah Sunset',"Matmata",'Sahara','Sousse Ribat','Sousse','Star wars touzer','Star wars tatouine','Amphitheatre el djem','Tamerza Oasis']

    console.log(indimgsess4);
    var imgchn = document.getElementById('imgsesss4');
    imgchn.src = "../images/" + img[indimgsess4];
    imgchn.alt = alt[indimgsess4];
}

function chngMpImg() {
    var img = document.getElementById('imgMap');
    var btn = document.getElementById('btnchngMpImg');
    var nomimg=img.src.split('/').pop();
    if(nomimg==="map-tour1.svg"){
        img.src="../images/tunisia_interactive_map.svg";
    }else{
        img.src="../images/trips-routes/map-tour1.svg";
    }
}

$('#page-subpage #section1 #section1-slick').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,

    autoplaySpeed: 4000,
    prevArrow: null,
    nextArrow: null,
    fade: true,
    cssEase: 'linear',
    appendArrows: $('#page-subpage'),
});
