function changSection6(index) {
    //bch nbadal il itm actv
    for (var i = 0; i < 6; i++) {
        var itmdId = 'itm' + i;
        var itm = document.getElementById(itmdId);
        if (index == i) {
            itm.classList.add('item-actv');
            itm.classList.remove('item-inactv');
        } else {
            itm.classList.add('item-inactv');
            itm.classList.remove('item-actv');
        }
    }


    var section5Cont = document.getElementById('section5-cont');
    section5Cont.innerHTML = '';

    for (var i = 0; i < 4; i++) {
        section5Cont.innerHTML += `
            <div class="crdsess5 p-lg-5 mt-lg-5">
                <div class="row">
                    <div class="col-lg-6 crdsess5-prt1">
                        <img class='crdsess5-img' src="../images/Bardo_museum.jpg" alt="Bardo National Museum">
                    </div>
                    <div class="col-lg-6 pl-lg-5 crdsess5-prt2">
                        <p class="sub-title">바르도 박물관</p>
                        <p>바르도 박물관은 튀니지 전역에서 발굴된 유물들을 비롯해 그리스, 로마, 이집트 유물을 시대별로 전시해 놓았어요.</p>
                        <p>특히 고대의 다양한 모자이크 장식품 등이 전시돼 있어 세계 최대의 모자이크 전시관으로 유명합니다.</p>
                        <div>
                            <button class="btn">Play Video <img src="../images/Arrow Right white.png"></button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
    /* section5Cont.innerHTML += ` <div class="d-flex justify-content-center mt-5 ">
    <a class="carousel-control-prev flch"  role="button"
        data-slide="prev" onclick="BPsrllcrdssess5(-1)">
        <span class="carousel-control-prev-icon-gauche" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <span id='crcl1sess5'></span>
    <span id='crcl2sess5'></span>
    <span id='crcl3sess5'></span>
    <a class="carousel-control-next flch"  role="button"
        data-slide="next" onclick="BPsrllcrdssess5(1)">
        <span class="carousel-control-prev-icon-droite" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>`; */

}

function BPsrllcrdssess5(indx) {
    var j = 1;
    for (var i = 0; i < 3; i++) {
        var idcrcl = 'crcl' + j + 'sess5';
        var crcl = document.getElementById(idcrcl);
        console.log(crcl);
        if (i == indx) {
            crcl.style.backgroundImage = "url(../images/ptbl.svg)";
            crcl.style.backgroundSize = "auto";
            console.log(crcl);
        } else {
            crcl.style.backgroundImage = "url(../images/ftbl.svg)";
            console.log(crcl);
        }
        j++;
    }

}


function addClassBasedOnWidth() {
    var section3 = document.getElementById('items');
    var section5 = document.getElementById('section5-cont');

    if (window.innerWidth <= 767) {
        section3.classList.add('section3-mobil');
        section5.classList.add('section5-mobil');
    } else {
        section3.classList.remove('section3-mobil');
        section5.classList.remove('section5-mobil');
    }
}

addClassBasedOnWidth();

window.addEventListener('resize', addClassBasedOnWidth);

$('#blog-page #section3 .section3-mobil').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});
$('#blog-page #section5 .section5-mobil').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});


$('.slick-sect4').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
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


function playvid(numvid) {
    for (var i = 1; i < 4; i++) {
        var idback = 'back' + i;
        var back = document.getElementById(idback);
        var idyout = 'yt' + i;
        var yout = document.getElementById(idyout);
        var idvideo = 'video' + i;
        var video = document.getElementById(idvideo);
        if (i == numvid) {
            if (video.paused) {
                video.play();
                back.style.display = 'none';
                yout.style.display = 'none';
            } else {
                video.pause();
                back.style.display = 'block';
                yout.style.display = 'block';
            }
        }else{
            back.style.display = 'block';
            yout.style.display = 'block';
            video.pause();
        }
    }
}
