class Article {

    //  Konstruktor
    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.article = null;        //  Pobrany element
        this.body = null;           //  Treść artykułu
        this.title = null;          //  Tytuł artykułu
        this.created = null;        //  Timestamp
        this.edited = null;         //  Timestamp

        this.generate();            //  Generowanie gotowego artykułu
    }

    //  Generowanie poprawnej struktury artykułu
    generate() {

        //  Pobranie elementu ze strony
        this.article = document.querySelector(this.selector);
        if(this.article) {      //  Jeśli element nie jest pusty

            //  Przypisanie poszczególnych elementów artykułu
            this.body = this.article.querySelector(".page-article-body");
            this.title = this.article.querySelector(".page-article-title");
            this.created = this.article.querySelector(".page-article-time-c");
            this.edited = this.article.querySelector(".page-article-time-e");

            //  Operacje na elementach artykułu
            this.formatBody();
        }
    }

    //  Formatowanie tekstu artykułu
    formatBody() {

        //  Tworzenie paragrafów w tekście
        const bodyTextArray = this.body.innerHTML.split('//para//');
        this.body.innerHTML = "";
        bodyTextArray.forEach(elem => {
            this.body.innerHTML += "<p>" + elem + "</p>";
        });
    }
}

class List {

    //  Konstruktor
    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.list = null;           //  Pobrany element
        this.elems = [];            //  Elementy listy

        this.generate();            //  Generowanie gotowej listy
    }

    //  Generowanie poprawnej struktury listy
    generate() {

        //  Pobranie elementu ze strony
        this.list = document.querySelector(this.selector);
        if(this.list) {      //  Jeśli element nie jest pusty

            //  Przypisanie elementów listy
            this.elems = this.list.querySelectorAll(".list-elem");

            //  Operacje na liście
            this.formatList();
        }
    }

    //  Formatowanie gotowej listy
    formatList() {

        this.elems.forEach((elem, index) => {
            if(elem.style.animation) {
                elem.style.animation = "";
            } else {
                elem.style.animation = `pageListElemsAnim 0.3s ease-in-out forwards ${index/5 + 0.1}s`;
            }
        });
    }
}


//  Eksportowanie klas do pliku wykonawczego
export {Article, List}