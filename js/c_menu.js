class Menu {

    //  Konstruktor
    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.menu = null;           //  Pobrany element
        this.list = null;           //  Lista linków
        this.links = [];            //  Linki z menu
        this.btn = null;            //  Przycisk menu

        this.generate();            //  Generowanie menu na stronie
    }

    //  Generowanie menu
    generate() {

        //  Pobieranie elementu z dokumentu
        this.menu = document.querySelector(this.selector);
        if(this.menu) {     //  Jeśli element nie jest pusty

            /*
                Ponieważ menu zostało utworzone we wcześniejszej
                fazie projektu, jego generowanie ogranicza się tylko
                do nadani mu potrzebnych właściwości i animacji.
            */

            //  Wczytanie poszczegolnych elementow menu
            this.list = this.menu.querySelector(".menu-link-list");
            this.links = this.menu.querySelectorAll(".menu-link-list-elem");
            this.btn = this.menu.querySelector(".menu-info-btn");

            //  Nadanie podstawowych własności dla elementów menu
            this.btn.addEventListener("click", (e) => {
                e.preventDefault();

                //  Zmiana toglera
                e.target.classList.toggle("menu-info-btn-cross");

                //  Zmiana widoku menu
                this.list.classList.toggle("menu-link-list-active");

                //  Wjazd/wyjazd pozycji menu
                this.links.forEach((link, index) => {
                    if(link.style.animation) {
                        link.style.animation = "";
                    } else {
                        link.style.animation = `menuLinkListElemAnim 0.4s ease-in-out forwards ${index/7 + 0.1}s`;
                    }
                });
            });
        }
    }
}

//  Eksportowanie klasy
export {Menu}