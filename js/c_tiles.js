class Tiles {

    //  Konstruktor
    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.elem = null;           //  Pobrany element
        this.elems = [];            //  Elementy listy

        this.generate();            //  Generowanie gotowego elementu
    }

    //  Generowanie poprawnej struktury listy
    generate() {

        //  Pobranie elementu ze strony
        this.elem = document.querySelector(this.selector);
        if(this.elem) {      //  Jeśli element nie jest pusty

            //  Przypisanie elementów listy
            this.elems = this.elem.querySelectorAll(".tile");

            //  Operacje na liście
            this.formatTiles();
        }
    }

    //  Formatowanie gotowej listy
    formatTiles() {

        this.elems.forEach((elem, index) => {
            if(elem.style.animation) {
                elem.style.animation = "";
            } else {
                elem.style.animation = `tileAnim 1.2s ease-in-out forwards ${index/5 + 0.1}s`;
            }
        });
    }
}

//  Eksportowanie klas do pliku wykonawczego
export {Tiles}