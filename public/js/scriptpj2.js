$('section .slick-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

$('.one-time-slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});


$('.slick-section-10').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    cssEase: 'linear'
});

var indx = 0;

function srllimg(x) {

    var img = [
        "../images/chammousa.png",
        "../images/mtarr.png",
        "../images/msa77ba.png"
    ];
    var titr = ["6월부터 9월:", "12월부터 2월 : 겨울", "봄(3~5월)과 가을(10~11월)"];
    var p = [
        "튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더 올라가며 건조해지는 사하라 성 기후를 보입니다.<br>하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게 좋습니다.",
        "튀니지에도 겨울이 있습니다. 더운 여름만 생각하셨다면 꽤 매서운 추위를 경험할 텐데요. 영하로 내려가는 추위는 아니지만, 한국의 초겨울 날씨를 보입니다.<br> 12월 평균기온은 11 ̊C예요. 겨울에는 오히려 북부가 신선하고 습하며, 남부는 온화하고 건조합니다.<br> 겨울철 난방을 위한 실내 설계가 잘 안되어 있는 경우가 있으니 겨울철 방문을 준비 중이라면 전기장판, 경량 패딩, 목도리, 수면 바지, 수면 양말 등을 챙기길 추천해 드려요. 또한 겨울철에는 비가 오는 경우가 많으니 작은 우산이나 우비도 잊지 마세요!",
        "봄과 가을에는 평균기온이 약 20C에서 25 C를 웃도는 날씨를 유지합니다. 한국의 봄가을과 비슷한 날씨를 생각하면 되고, 일교차가 있으니 가벼운 겉옷을 늘 챙겨 다니는 게 좋습니다.<br>해안지역은 바닷바람 때문에 조금 더 춥다고 느낄 수 있어요. 한편 남부 사막을 여행 하기에 딱 좋은 날씨이니 사막여행을 계획 중인 분들이라면 봄가을 시기를 추천합니다."
    ];

    if (x == -1 && indx > 0) {
        indx--;
    } else if (x == 1 && indx < 2) {
        indx++;
    } else if (x == -1 && indx == 0) {
        indx = 2;
    } else {
        indx = 0;
    }

    if (indx === 0) {
        crcl1.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (indx === 1) {
        crcl1.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ptbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ftbl.svg)";
    } else if (indx === 2) {
        crcl1.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl2.style.backgroundImage = "url(../images/ftbl.svg)";
        crcl3.style.backgroundImage = "url(../images/ptbl.svg)";
    }

    document.getElementById('imgchoose').src = img[indx];
    document.getElementById('scrlltitr').innerHTML = titr[indx];
    document.getElementById('scrllp').innerHTML = p[indx];


}

function changtext(indx) {
    var titr = ["튀니지의 아랍어", "튀니지의 프랑스어", "튀니지의 영어", "아마지그어"];
    var p = [
        "2011년 시민혁명 이후 제정된 튀니지 헌법 제1조는 아랍어를 ‘국가의 언어’로 규정하고 있어요. 또한 헌법 제39조에는 아랍 정체성과 아랍어 사용 교육의 보편화가 규정되어 있기도 합니다.<br>튀니지 아랍어는 국경을 마주하는 알제리나 모로코 방언과 비슷해요. 표준 아랍어와는 차이가 있어서 튀니지에서는 튀니지어를 사용한다는 농담도 있어요. 튀니지 아랍어는 표준아랍어와 프랑스어, 그리고 이탈리아어 등 다양한 언어가 많이 섞인 형태예요.",
        "프랑스가 튀니지를 식민 지배하는 동안, 프랑스어가 공공 기관과 교육 시스템에 도입됐어요. 프랑스어 사용 국가로 구성된 국제기구인 프랑코포니의 정회원국이기도 해요.",
        "젊은 튀니지인들은 영어를 상당히 잘하고, 프랑스어보다 영어를 선호하는 경향을 보입니다.",
        "베르베르인들이 쓰는 언어로 베르베르어라고도 불립니다. 중세에 아랍어가 퍼지기 전 북아프리카 지역에서 사용되었던 언어예요."
    ];
    var img = [
        "../images/arabe-langue.png",
        "../images/Francais-langur.png",
        "../images/anglais-langue.png",
        "../images/amzigh-langue.png",
    ];

    document.getElementById('titrp5').innerHTML = titr[indx];
    document.getElementById('spnprt5').innerHTML = p[indx];
    document.getElementById('img-langue').src = img[indx];

    var btn0 = document.getElementById('btn0');
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    var btn3 = document.getElementById('btn3');

    if (indx == 0) {
        btn0.classList = 'p-2  btnactv';
        btn1.classList = 'p-2 btninactv';
        btn2.classList = 'p-2 btninactv';
        btn3.classList = 'p-2 btninactv';
    } else if (indx == 1) {
        btn0.classList = 'p-2 btninactv';
        btn1.classList = 'p-2  btnactv';
        btn2.classList = 'p-2 btninactv';
        btn3.classList = 'p-2 btninactv';
    } else if (indx == 2) {
        btn0.classList = 'p-2 btninactv';
        btn1.classList = 'p-2 btninactv';
        btn2.classList = 'p-2  btnactv';
        btn3.classList = 'p-2 btninactv';
    } else {
        btn0.classList = 'p-2 btninactv';
        btn1.classList = 'p-2 btninactv';
        btn2.classList = 'p-2 btninactv';
        btn3.classList = 'p-2  btnactv';
    }
}


function changeElement(index) {
    var img = [
        "images/Kairouan-Great.png",
        "images/Judaism.png",
        "images/Christianity.png"
    ];
    var altTexts = ['Kairouan Great Tunisia', 'Judaism Tunisia', 'Christianity Tunisia'];
    var headings = ['이슬람', '유대교', '기독교'];
    var descriptions = [
        '국민의 98.2%가 수니파 이슬람을 믿는 무슬림입니다. 그렇지만 1988년 국가 헌장에 따라 종교의 자유가 보장됩니다. 다만 개종 권유, 포교는 법적 제한을 받아요.',
        '튀니지에는 아주 오래 전부터 유대교 소수민족이 있었습니다. 1967년 이후 대부분의 유대인들이 프랑스나 이스라엘로 이주했고, 현재 남아있는 유대인들의 대부분은 제르바섬에 거주하고 있습니다.',
        '튀니지 내 기독교 공동체도 있습니다. 공동체는 대부분 외국인들로 구성되어 있어요. 이들은 자유롭게 교회 예배를 드리며 소수의 학교를 운영하기도 합니다.'
    ];

    var dynamicImage = document.getElementById('img44');
    var heading = document.getElementById('h4prt6');
    var description = document.getElementById('pprt6');

    dynamicImage.src = img[index];
    dynamicImage.alt = altTexts[index];
    heading.textContent = headings[index];
    description.textContent = descriptions[index];

    var btns = document.querySelectorAll('.buttons-8 button');

    btns.forEach(btn => {
        btn.classList.remove('btnactv');
        btn.classList.add('btninactv');
    });

    btns[index].classList.remove('btninactv');
    btns[index].classList.add('btnactv');
}




function fade(element, value, type) {
    var op = 1;
    var timer = setInterval(function () {
        if (op <= 0.1) {
            clearInterval(timer);
            element.style.display = 'none';
            if (type == 0) {
                element.src = value;
                console.log(element);
            } else {
                element.innerHTML = value;
            }

            unfade(element);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 5);
}

function unfade(element) {
    var op = 0.1; // initial opacity
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1) {
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 5);
}


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

    document.getElementById("tunis-time").textContent = timeString;
}


updateClock();


setInterval(updateClock, 1000);



function changtextSect3(indx) {
    for(var i=0;i<3;i++) {
        var idbtn='btn'+i+'sect5';
        var btn=document.getElementById(idbtn);console.log(btn);
        if(i == indx){
            if (btn.classList.contains('btninactv')) {
                btn.classList.replace('btninactv', 'btnactv');
            }
        }else{
            if (btn.classList.contains('btnactv')) {
                btn.classList.replace('btnactv', 'btninactv');
            }
        }
    }
    var titr = ["6월부터 9월:", "12월부터 2월 : 겨울", " 봄(3~5월)과 가을(10~11월)"];
    var p = [
        "튀니지 현지의 여름은 매우 뜨겁습니다. 8월 평균 기온은 33C이며, 40̊C가 넘을 때도 있어요.<br> 북부 튀니지는 덥고 건조하며 남부로 내려갈수록 기온이 더올라가며건조해지는 사하라 성 기후를 보입니다.<br> 하지만 아침, 저녁으로 해가 떨어지면 기온이 크게 내려가는 양상을 보이니 일교차에 유념하여 가디건을 챙기는 게 좋습니다.",
        "튀니지에도 겨울이 있습니다. 더운 여름만 생각하셨다면 <br>꽤 매서운 추위를 경험할 텐데요. 영하로 내려가는 추위는 아니지만, 한국의 초겨울 날씨를 보입니다.<br>12월 평균기온은 11 ̊C예요. 겨울에는 오히려 북부가 신선하고 습하며, 남부는 온화하고 건조합니다.<br> 겨울철 난방을 위한 실내 설계가 잘 안되어 있는 경우가있으니 <br>겨울철 방문을 준비 중이라면 전기장판, 경량 패딩, 목도리, 수면 바지, 수면 양말 등을 챙기길 추천해 드려요. 또한 겨울철에는 비가 오는 경우가 많으니 작은우산이나 우비도 잊지 마세요!",
        "봄과 가을에는 평균기온이 약 20C에서 25 C를 웃도는 날씨를 유지합니다. 한국의 봄가을과 비슷한 날씨를 생각하면 되고, 일교차가 있으니 가벼운 겉옷을 늘 챙겨다니는 게 좋습니다.<br>해안지역은 바닷바람 때문에 조금 더 춥다고 느낄 수 있어요.<br> 한편 남부 사막을 여행 하기에 딱 좋은 날씨이니 사막여행을 계획 중인분들이라면 봄가을 시기를 추천합니다."
    ];
    var img = [
        "../images/chammousa.png",
        "../images/mtarr.png",
        "../images/msa77ba.png",
    ];
    var alt=['Sun','Rain','lkij']

    document.getElementById('sec3titrp5').innerHTML = titr[indx];
    document.getElementById('sec3spnprt5').innerHTML = p[indx];
    document.getElementById('sec3img').src = img[indx];
    document.getElementById('sec3img').alt = alt[indx];

}
