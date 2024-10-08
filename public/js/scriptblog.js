function changSection6(index) {
    //bch nbadal fel activation nta3 il items
    var itm0 = document.getElementById('itm0');
    var itm1 = document.getElementById('itm1');
    var itm2 = document.getElementById('itm2');
    var itm3 = document.getElementById('itm3');
    var itm4 = document.getElementById('itm4');
    var itm5 = document.getElementById('itm5');
    var itm6 = document.getElementById('itm6');

    if (index == 0) {
        itm0.classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 1) {
        itm1.classList = 'item-actv';
        itm0.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 2) {
        itm2.classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm0.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 3) {
        itm3.classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm0.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 4) {
        itm4.classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm0.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 5) {
        itm5.classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm0.classList = 'item-inactv';
        itm6.classList = 'item-inactv';
    } else if (index == 6) {
        itm6classList = 'item-actv';
        itm1.classList = 'item-inactv';
        itm2.classList = 'item-inactv';
        itm3.classList = 'item-inactv';
        itm4.classList = 'item-inactv';
        itm5.classList = 'item-inactv';
        itm0.classList = 'item-inactv';
    }


    var titr = ["Popular", "News", "Travel Tips", "Food", 'Life Style', 'Art', 'Knowledge'];

    //3ayatt lil section ili bch n5dm aliha wfara8tha
    var section = document.getElementById('section-6');
    section.innerHTML = '';
    //linna badalt il 3nwen de section
    var grand_titre = titr[index];

    //linna bch nsna3 les partie mte3i statique wba3ed ywalliw dynamique
    //hna sna3t il parite head de section
    var divElement = document.createElement('div');
    divElement.className = 'head';

    var h1Element = document.createElement('h1');
    h1Element.textContent = grand_titre + ' Topics';

    var pElement = document.createElement('p');
    pElement.className = 'col-lg-5 pl-0';
    pElement.textContent = 'Lorem ipsum dolor sit amet consectetur adipiscing elit semper dalar elementum tempus hac tellus libero';
    //bch nzidhom lil div head 
    divElement.appendChild(h1Element);
    divElement.appendChild(pElement);
    //hna sna3t div cards ili bch n7ott fiha les cards nte3i 
    var divCards = document.createElement('div');
    divCards.className = 'cards';
    //linna bch n3abbi les cards
    for (let i = 0; i < 3; i++) {
        var divRow = document.createElement('div');
        divRow.className = 'row pt-5';

        var divCol1 = document.createElement('div');
        divCol1.className = 'col-lg-6 pl-5';

        var imgElement = document.createElement('img');
        imgElement.src = "../images/Container (1).png";
        imgElement.className = 'card-imag';

        var divCol2 = document.createElement('div');
        divCol2.className = 'col-lg-6 description pl-5';

        var h3Element = document.createElement('h3');
        h3Element.innerHTML = 'Catchy Title:<br>The main point behind it';

        var pElement = document.createElement('p');
        pElement.className = 'col-lg-8';
        pElement.innerHTML = 'Lorem ipsum dolor sit amet consectetur adipiscing elit dolor semper at ac tempus enim.';

        var buttonElement = document.createElement('button');
        buttonElement.className = 'btn radius-20 btn-color col-lg-3';
        buttonElement.innerHTML = 'Read Full Article';

        // zdt les elements nta3 il card ili sna3tha lil div cards
        divCol1.appendChild(imgElement);
        divCol2.appendChild(h3Element);
        divCol2.appendChild(pElement);
        divCol2.appendChild(buttonElement);
        divRow.appendChild(divCol1);
        divRow.appendChild(divCol2);
        divCards.appendChild(divRow);
    }
    //hna 3awedt 3abbit secrion 6
    section.appendChild(divElement);
    section.appendChild(divCards);
}
