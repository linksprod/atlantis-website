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

/* section  change cards */
function chngcontsess4(x) {
    var choix0 = document.getElementById('choix0');
    var choix1 = document.getElementById('choix1');
    var choix2 = document.getElementById('choix2');
    var choix3 = document.getElementById('choix3');
    if (x == 0) {
        choix0.classList = 'p-2  btnactv';
        choix1.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
    } else if (x == 1) {
        choix1.classList = 'p-2  btnactv';
        choix0.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
    } else if (x == 2) {
        choix2.classList = 'p-2  btnactv';
        choix0.classList = 'p-2 btninactv';
        choix1.classList = 'p-2 btninactv';
        choix3.classList = 'p-2 btninactv';
    } else if (x == 3) {
        choix3.classList = 'p-2  btnactv';
        choix0.classList = 'p-2 btninactv';
        choix1.classList = 'p-2 btninactv';
        choix2.classList = 'p-2 btninactv';
    }


    var p = [
        "고객의 필요에 따라 프라이빗 차량+운전기사 서비스를 이용할 수 있습니다.공항-호텔 간 운행 및 비즈니스 미팅을 위한 다수의 회의 장소로 여러번의 이동이 가능하며 원하는 시간에 예약할 수 있습니다.<br>포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료<br>불포함사항- 투어 가이드, 개인 여행자 보험",
        "동호회, 소규모 단체의 행사 등의 목적으로 미니버스+운전기사 서비스를 이용할 수 있습니다. 기업 워크샵, 대가족 단체 여행, 유적지 답사, 연수 등의편안하고 안전한 일정을 아틀란티스가 도와드립니다.<br>포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료<br>불포함사항- 투어 가이드, 개인 여행자 보험",
        "단체의 편안하고 쾌적한 여행을 위한 중대형버스+운전기사 서비스를 제공합니다. 넓직한 실내공간에서 편안한 이동을 하고 싶은 단체고객들의 여행에 품격을 더합니다.<br> 포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료<br>불포함사항- 투어 가이드, 개인 여행자 보험",
        "의전차량고급 럭셔리 차량으로 VIP 고객 의전을 수행합니다. 국제 행사 혹은 기업 만찬 등을 위해 방문한 VIP고객들이 고품격 의전서비스를 누릴 수 있습니다.<br>포함사항- 운전기사 이용 요금, 주차비, 연료비, 통행료<br>불포함사항- 투어 가이드, 개인 여행자 보험"
    ];
    var h1 = ['places 1-4', "places Max 22 (최대 22명)", "Places Max 53 (최대 53명)", "Places Max 8 "];
    var h2 = ['Fee 상담 후 메일 안내', "Fee 상담 후 메일 안내  ", "Fee 상담 후 메일 안내", "Fee 상담 후 메일 안내"];

    document.getElementById('psess4').innerHTML = p[x];
    document.getElementById('h1sess4').innerHTML = h1[x];
    document.getElementById('h2sess4').innerHTML = h2[x];
    document.getElementById('numcrd').value = x;
    var crd1 = ['Car.jpg'];
    var crd3 = ['bus.png'];

    var numcrd = document.getElementById('numcrd').value;
    var secImg = document.getElementById('PAS4I1');
    var PAS4I1 = document.getElementById('PAS4I1');
    var PAS4I2 = document.getElementById('PAS4I2');
    var PAS4I3 = document.getElementById('PAS4I3');
    secImg.innerHTML = '';
    if (numcrd == 0) {
        for (var i = 0; i < crd1.length; i++) {
            secImg.innerHTML += `
                <img class='w-100 imgsess4 radius-20' src="../images/`+ crd1[i] + `" alt="Bardo National Museum">
        `;
        }
        PAS4I1.style.opacity = 1;
        PAS4I1.style.position = 'relative';
        PAS4I2.style.opacity = 0;
        PAS4I2.style.position = 'absolute';
        PAS4I3.style.opacity = 0;
        PAS4I3.style.position = 'absolute';
    } else if (numcrd == 1) {
        PAS4I1.style.opacity = 0;
        PAS4I1.style.position = 'absolute';
        PAS4I2.style.opacity = 1;
        PAS4I2.style.position = 'relative';
        PAS4I3.style.opacity = 0;

    } else if (numcrd == 2) {
        for (var i = 0; i < crd3.length; i++) {
            secImg.innerHTML += `
                <img class='w-100 imgsess4 radius-20' src="../images/${crd3[i]}" alt="Bardo National Museum">
            `;
        }

        PAS4I1.style.opacity = 1;
        PAS4I1.style.position = 'relative';
        PAS4I2.style.opacity = 0;
        PAS4I2.style.position = 'absolute';
        PAS4I3.style.opacity = 0;
        PAS4I3.style.position = 'absolute';
    } else if (numcrd == 3) {
        
        PAS4I1.style.opacity = 0;
        PAS4I1.style.position = 'absolute';
        PAS4I2.style.opacity = 0;
        PAS4I2.style.position = 'absolute';
        PAS4I3.style.opacity = 1;
        PAS4I3.style.position = 'relative';
    }
}
$('#PAS4I2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    prevArrow: '<button class="slick-prev" style="position: absolute; top: 50%; left: 0%; transform: translateY(-50%); border: none; padding: 10px; z-index: 1000;">&#9664;</button>',
    nextArrow: '<button class="slick-next" style="position: absolute; top: 50%; right: 4%; transform: translateY(-50%); border: none; padding: 10px; z-index: 1000;">&#9654;</button>',
});
$('#PAS4I3').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    prevArrow: '<button class="slick-prev" style="position: absolute; top: 50%; left: 0%; transform: translateY(-50%); border: none; padding: 10px; z-index: 1000;">&#9664;</button>',
    nextArrow: '<button class="slick-next" style="position: absolute; top: 50%; right: 4%; transform: translateY(-50%); border: none; padding: 10px; z-index: 1000;">&#9654;</button>',  
});



z = 0;

function srllcrdssess5(x) {
    if (x == -1 && z == 1) {
        z = 0;
    } else if (z == 0 && x == 1) {
        z = 1;
    } else if (x == -1 && z == 0) {
        z = 1;
    } else {
        z = 0;
    }

    var crcl1sess5 = document.getElementById('crcl1sess5');
    var crcl2sess5 = document.getElementById('crcl2sess5');
    if (z === 0) {
        crcl1sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl1sess5.style.backgroundSize = "auto";
        crcl2sess5.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (z === 1) {
        crcl1sess5.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2sess5.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl2sess5.style.backgroundSize = "auto";
    }

    //declaration des cnst
    //first crcl
    var h20 = ['Four Seasons Tunis', 'Anantara Tozeur', 'Movenpick Sousse', 'The Residence Tunis', 'Le Kasbah Kairouan', 'Pansy KSAR Ghilene'];
    var p0 = ['Tunis, Tunisia', 'Tozeur, Tunisia', 'Sousse, Tunisia', 'Tunis, Tunisia', 'Kairouan, Tunisia', 'Douz, Tunisia'];
    var img0 = ['Four-Seasons-Tunis.jpeg', 'Anantara-Tozeur.jpeg', 'Movenpick-Sousse.jpeg', 'The-Residence-Tunis.jpeg', 'Le-Kasbah-Kairouan.jpeg', 'Pansy-KSAR-Ghilene.jpeg'];
    var alt0 = ['Four Seasons Tunis', "Anantara Tozeur", "Movenpick Sousse", "The Residence Tunis", "Le Kasbah Kairouan", "Pansy KSAR Ghilene"];
    var a0 = ['https://www.fourseasons.com/tunis/', 'https://www.anantara.com/en/sahara-tozeur', 'https://movenpick.accor.com/fr/africa/tunisia/sousse/hotel-sousse.html', 'https://www.residencetunis.com/fr/', 'https://www.goldenyasmin.com/fr/', 'https://www.facebook.com/reservationpansy/'];
    //seconde crcl
    var h21 = ['Radisson Sfax', 'Sheraton', 'Africa', 'Movenpick Lac 2', 'Mouradi Gammarth', 'Camp Mars'];
    var p1 = ['Sfax, Tunisia', 'Hammamet, Tunisia', 'Tunis, Tunisia', 'Tunis, Tunisia', 'Tunis, Tunisia', 'Douz, Tunisia'];
    var img1 = ['Radisson-Sfax.jpeg', 'Sheraton.jpeg', 'Africa.jpeg', 'Movenpick-Lac-2.jpeg', 'Mouradi-gammarth-2.jpeg', 'mars2.jpg'];
    var alt1 = ['Radisson Sfax', 'Sheraton', 'Africa', 'Movenpick Lac 2', 'Mouradi Gammarth', 'Camp Mars'];
    var a1 = ['https://www.radissonhotels.com/fr-fr/hotels/radisson-sfax', 'https://sheraton.hammamet-hotels-tn.com/fr/', 'https://hotel-africa-tunis.h-rez.com/', 'https://movenpick.accor.com/en/africa/tunisia/tunis/hotel-du-lac-tunis.html', 'https://www.elmouradi.com/', 'https://camp-mars.com/'];

    //3ayatt lil section ili bch n5dm aliha wfara8tha
        var section = document.getElementById('sess5-crds');
        section.innerHTML = '';
    var ind = 0;
    var tailltab = 0;
    if (z === 0) {
        tailltab = h20.length;
    } else if (z === 1) {
        tailltab = h21.length;
    }
    //action sur les card
    for (i = 0; i < tailltab; i++) {
        if (z === 0) {
            h2 = h20[ind];
            p = p0[ind];
            img = '../images/' + img0[ind];
            alt = alt0[ind];
            a = a0[ind];
        } else if (z === 1) {
            h2 = h21[ind];
            p = p1[ind];
            img = '../images/' + img1[ind];
            alt = alt1[ind];
            a = a1[ind];
        }
        ind++;
        console.log(a);

        let sectionContent = '';

        if(z==0&i==5){
            nbs=3;
        }else if(z==1&i==5){
            nbs=0;
        }else{
            nbs=5;
        }
        sectionContent += `
        <div class="col-lg-3  sess5crd radius-20">
        <a id="sess5crd1href" href="` + a + `">
        <div class="mask-image">

            <img id='sess5crd1img' src="../images/` + img + `" class="img-fluid"
                alt="` + alt + `">
        </div>
        <img src="../images/sess6crd1crcl.png" alt='cercle blue' class="cercle-img">
        <p class="text-img">링크</p>
        <div class="posit">
            <img src="../images/gps.png" alt='gps' class="mr-2">
            <p id="sess5crd1p">` + p + `</p>
        </div> ` ;
        if(nbs!=0){
            if(nbs==3){
                sectionContent += ` <div class="note" style="left: 37%;">`
            }else{
                sectionContent += ` <div class="note">`
            }
            for(var j=0;j<nbs;j++){
                sectionContent += `<img src="../images/review_Star.svg" alt='star'>`
            }
            sectionContent += `</div>`
        }

        sectionContent += `
        <h2 id="sess5crd1h2" class="sub-title sess5h2">` + h2 + `</h2>
        </a>
    </div>`;

        section.innerHTML += sectionContent;
    }
}

var idimg = 0;



var indxcrd = 0;

function PAsrllcrdssess6(x) {
    if (x == -1 && indxcrd > 0) {
        indxcrd--;
    } else if (x == 1 && indxcrd < 2) {
        indxcrd++;
    } else if (x == -1 && indxcrd == 0) {
        indxcrd = 2;
    } else {
        indxcrd = 0;
    }
    console.log('indxcrd ', indxcrd);

    var ind = 1;
    for (var i = 0; i < 3; i++) {
        var idcrcl = "PAcrcl" + ind + "sess6";
        var crcl = document.getElementById(idcrcl);
        if (i == indxcrd) {
            console.log('ind ', ind);
            crcl.style.backgroundImage = "url(../images/ptbl.svg)";
            crcl.style.backgroundSize = 'auto'
        } else {
            crcl.style.backgroundImage = "url(../images/ftbl.svg)";
        }
        ind++;
    }

    //declaration des cnst
    //first crcl
    var h20 = ['Dar Ben Gacem', 'Dar Fatma', 'Dar ellamma'];
    var p0 = ['Medina of Tunis', 'Sidi bou said', 'Bizerte, tunisia'];
    var img0 = ['dar_bel_gesem.jpg', 'dar_fatma.jpg', 'guesthouse-_bizerte-_dar_Ellamma.jpg'];
    var alt0 = ['Dar ellamma', "Dar Belgecem", "Dar Fatma", ];
    var a0 = ["https://darbengacem.com/", "https://darfatma.com/", "https://www.darellamma.com/"];
    //seconde crcl
    var h21 = ['Dar Antonia', 'Diar Abou Habibi', 'Dar Saida Baya'];
    var p1 = ['Médina de Sousse', ' Tozeur', 'Tozeur'];
    var img1 = ['dar_antonia.jpg', 'diar-abou-habibi.jpg', 'dar_saida_baya.jpg'];
    var alt1 = ['Dar Antonia', 'Diar Abou Habibi', 'Dar Saida Baya'];
    var a1 = ["about:blank", "https://www.diarhabibi.com/", "http://www.darsaidabeya.com/"];
    //3rd crcl
    var h22 = ['Dar Dhiafa'];
    var p2 = ['Djerba'];
    var img2 = ['dar_dhiafa.jpg'];
    var alt2 = ['Dar Dhiafa'];
    var a2 = ["https://www.facebook.com/dar.dhiafa/"];
    //3ayatt lil section ili bch n5dm aliha wfara8tha
    var section = document.getElementById('sess6-crds');
    section.innerHTML = '';
    var ind = 0;
    var tailltab = 0;
    if (indxcrd === 0) {
        tailltab = h20.length;
    } else if (indxcrd === 1) {
        tailltab = h21.length;
    } else {
        tailltab = h22.length;
    }
    //action sur les card
    for (i = 0; i < tailltab; i++) {
        if (indxcrd === 0) {
            h2 = h20[ind];
            p = p0[ind];
            img = '../images/' + img0[ind];
            alt = alt0[ind];
            a = a0[ind];
        } else if (indxcrd === 1) {
            h2 = h21[ind];
            p = p1[ind];
            img = '../images/' + img1[ind];
            alt = alt1[ind];
            a = a1[ind];
        } else {
            h2 = h22[ind];
            p = p2[ind];
            img = '../images/' + img2[ind];
            alt = alt2[ind];
            a = a2[ind];
        }
        ind++;
        console.log(h2);
        let sectionContent = '';

        sectionContent += `<div class="col-lg-3 sess6crd radius-20">`;

        sectionContent += `
        <a href="` + a + `" id="sess6crd1href">
            <div class="mask-image">

                <img class="sess6crdimg" src="../images/` + img + `" class="img-fluid" alt="` + alt + `">

            </div>
            <img src="../images/sess6crd1crcl.png" alt='cercle blue' class="cercle-img">
            <p class="text-img">링크</p>
            <div class="posit">
                <img src="../images/gps.png" alt='gps' class="mr-2">
                <p>` + p + `</p>
            </div>
            <h2 class="sub-title sess6h2">` + h2 + `</h2>
            </a>
        </div>`;

        section.innerHTML += sectionContent;

    }
}

$('.session3-slick-mobile').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});
$('.AT-SS-S1').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});
$('.session5-slick-mobile').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 1,
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
$('.session6-slick-mobile').slick({
    infinite: true,
    speed: 600,
    slidesToShow: 1,
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
});
