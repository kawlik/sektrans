class Cookie {

    constructor(selector) {

        this.selector = selector;   //  Selektor elementu
        this.cookie = false;        //  Wypieczone cisateczko
        this.elem = null;           //  Pobrany element
        this.btn = null;            //  Przycisk potwierdzenia

        this.makeCookie();
    }

    makeCookie() {

        this.elem = document.querySelector(this.selector);
        if(this.elem) {

            this.checkCookie();
            if(!this.cookie) {
                this.setCookie();
            }
        }
    }

    checkCookie() {
        
        //  Wyszukiwanie ciasteczka zgody
        this.cookie = document.cookie.includes("siteCookiesAgreement");
        if(this.cookie) {
            this.elem.style.display = "none";
        }
    }

    setCookie() {

        //  Obiekt musi być widoczny
        this.elem.style.display = "block";

        const now = new Date();
        const then = new Date(now.getUTCFullYear() + 1, now.getUTCMonth(), now.getUTCDate());

        this.btn = this.elem.querySelector(".btn");
        this.btn.addEventListener("click", (e) => {
            e.preventDefault();

            //  Tworzenie rocznego ciasteczka
            document.cookie = `siteCookiesAgreement = true; path = /; expires = ${then.toGMTString()}`;

            //  Usuwanie powiadomienia
            this.checkCookie();
        });
    }
}

export {Cookie}