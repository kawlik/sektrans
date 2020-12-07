class Form {

    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.form = null;           //  Formularz na stronie
        this.body = null;           //  Treść formularza (artykuł/mail)
        this.submit = null;         //  Przycisk wysyłający


        //  Elementy własciwe dla formularza kontaktowego
        this.name = null;   //  Dane klienta
        this.email = null;  //  Mail klienta
        this.phone = null;  //  Telefon klienta
        this.check = null;  //  Zgoda klienta
        


        //  Setowanie formularza ogólnego wzoru
        this.setForm();
        if(this.form) {
            this.setContactForm();
        }
    }

    /*  
        Elementy wspólne każdego formularza, czyli
        obsługa znaku nowej lini, zamiana "złośliwych"
        znaków i wysyłanie formularza do odpowiedniego pliku.
    */

    setForm() {

        this.form = document.querySelector(".form-rows");
        if(this.form) {     //  Jeśli formularz istnieje

            this.body = this.form.querySelector(".form-body");
            this.submit = this.form.querySelector(".form-submit");

            this.formatTextIn();
            this.submit.addEventListener("click", (e) => {
                e.preventDefault(); //  Zapobieganie przedwczesnemu wysłaniu
                e.target.classList.add("form-loading");


                //  Formatowanie tekstu oraz zatwierdzanie formularza
                this.formatTextOut();
                setTimeout(() => this.form.submit(), 3000);
            });
        }
    }

    formatTextIn() {

        const toFormat = this.body.value;
        const formated = toFormat.split("//para//");
        formated.forEach((elem) => {
            elem = elem.replace(/\n/, "");
        })

        this.body.value = formated.join("\n");
    }

    formatTextOut() {
        const toFormat = this.body.value;
        const formated = toFormat.split("\n");
        this.body.value = formated.join("//para//");
    }

    formSubmit() {

        //  Wyłączenie przycisku wysyłania
        //  do czasu walidacji danych
        this.submit.disabled = true;

        //  Nadanie stosownej animacji

    }

    /*  
        Elementy właściwe dla formularza kontaktowego,
        czyli obsługa i walidacja danych pochodzącyhc
        od klienta oraz

            obecnie:    włożenie do panelu admina
            docelowo:   wysłanie bezpośrednio na maila
    */

    setContactForm() {

        if(this.form.classList.contains("contact-form")) {

            //  To jest formularz kontaktowy
            //  Przypisanie dodatkowych własności
            this.name = this.form.querySelector(".form-name");
            this.email = this.form.querySelector(".form-email");
            this.phone = this.form.querySelector(".form-phone");
            this.check = this.form.querySelector(".form-check-input");
        }
    }
}

class FormElem {

    //  Konstruktor
    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.elems = null;          //  Pobrane element
        this.bodys = null;          //  Treści

        this.generate();            //  Generowanie gotowego artykułu
    }

    //  Generowanie poprawnej struktury artykułu
    generate() {

        //  Pobranie elementu ze strony
        this.elems = document.querySelectorAll(this.selector);
        if(this.elems) {      //  Jeśli element nie jest pusty

            //  Operacje na elementach artykułu
            this.formatBody();
        }
    }

    //  Formatowanie tekstu artykułu
    formatBody() {

        //  Tworzenie paragrafów w tekście
        this.elems.forEach(elem => {

            const body = elem.querySelector(".elem-body");
            const bodyTextArray = body.innerHTML.split('//para//');
            body.innerHTML = "";

            bodyTextArray.forEach(elem => {
                body.innerHTML += "<p>" + elem + "</p>";
            });


            const btn = elem.querySelector(".elem-toggle");
            btn.addEventListener("click", (e) => {
                e.preventDefault();
                e.target.classList.toggle("elem-toggle-active");
                body.classList.toggle("elem-body-active");
            });
        });
    }
}


export {Form, FormElem}