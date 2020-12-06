class Slider {

    //  Konstruktor
    constructor(selector, options) {

        const defaultOptions = {
            time : 7500,
            
        }   //  Domyślny zestaw opcji dla slajdera

        this.options = Object.assign({}, defaultOptions, options);
        this.selector = selector;   //  Selektor elementu
        this.elem = null;           //  Pobrany element
        this.slider = null;         //  Gotowy slider
        this.slides = null;         //  Gotowe slajdy
        this.prev = null;           //  Przyciks prev
        this.next = null;           //  Przycisk next
        this.dots = [];             //  Przyciski kropek  
        this.current = 0;           //  Indeks aktualnego slajdu

        //  Generowanie slidera na stronie
        this.generate();
        if(this.slider) {   //  Nie wykona sie, jesli slidera nie ma
            this.changeSlide(this.current);
        }
    }

    //  Tworzenie slidera
    generate() {

        //  Pobieranie elementu z dokumentu
        this.slider = document.querySelector(this.selector);
        if(this.slider) {      //  Jeśli element nie jest pusty

            //  Tworzenie większego diva na slajdy
            const sliderCnt = document.createElement("div");
            sliderCnt.classList.add("slider-cnt");

            //  Przenoszenie slajdów do nowego diva
            this.slides = this.slider.children;
            while(this.slides.length) {
                sliderCnt.appendChild(this.slides[0]);
            }

            //  Wstawianie diva do dokumentu
            this.slides = sliderCnt.querySelectorAll(".slide");
            this.slider.appendChild(sliderCnt);

            //  Generowanie nawigacji
            this.generatePrevNextDots();

            //  Nakładanie animacji wstępnej
            this.slides[this.current].style.animation = "slideAnim 1s ease-in-out forwards 0s";
        }
    }

    //  Tworzenie przełączników
    generatePrevNextDots() {

        //  Przycisk prev
        this.prev = document.createElement("button");
        this.prev.type = "button";
        this.prev.classList.add("slider-btn");
        this.prev.classList.add("slider-btn-prev");
        this.prev.innerHTML = "<i class='fas fa-angle-double-left'></i>";
        this.prev.addEventListener("click", () => this.slidePrev());

        //  Przycisk next
        this.next = document.createElement("button");
        this.next.type = "button";
        this.next.classList.add("slider-btn");
        this.next.classList.add("slider-btn-next");
        this.next.innerHTML = "<i class='fas fa-angle-double-right'></i>";
        this.next.addEventListener("click", () => this.slideNext());

        //  Przyciski dots
        const dots = document.createElement("ul");
        dots.classList.add("slider-dots");
        for(let i = 0; i < this.slides.length; i++) {

            const dot = document.createElement("li");
            dot.classList.add("slider-dot");

            const btn = document.createElement("button");
            btn.classList.add("slider-dot-btn");
            btn.innerHTML = "<i class='far fa-lightbulb'></i>";
            btn.type = "button";
            btn.addEventListener("click", () => this.changeSlide(i));

            dot.appendChild(btn);
            dots.appendChild(dot);
            this.dots.push(dot);
        }

        //  Elementy nawigacyjne
        const sliderNav = document.createElement("div");
        sliderNav.classList.add("slider-nav");
        sliderNav.appendChild(this.prev);
        sliderNav.appendChild(this.next);
        sliderNav.appendChild(dots);

        //  Dołączanie do dokumentu
        this.slider.appendChild(sliderNav);
    }

    //  Zmiana slajdu
    changeSlide(index) {

        this.slides.forEach(slide => {
            slide.classList.remove("slide-active");
        });

        this.slides[index].classList.add("slide-active");

        this.dots.forEach(dot => {
            dot.children[0].classList.remove("slider-dot-btn-active");
        });
        this.dots[index].children[0].classList.add("slider-dot-btn-active");

        this.current = index;

        //  Automatyczna zmiana slajdu
        if(typeof this.options.time === "number" && this.options.time > 1) {
            clearInterval(this.time);
            this.time = setTimeout(() => this.slideNext(), this.options.time);
        }
    }

    //  Poprzedni slajd
    slidePrev() {
        this.current--;
        if(this.current < 0) {
            this.current = this.slides.length - 1;
        }

        this.changeSlide(this.current);
    }

    //  Następny slajd
    slideNext() {
        this.current++;
        if(this.current > this.slides.length - 1) {
            this.current = 0;
        }

        this.changeSlide(this.current);
    }
}

//  Eksportowanie klasy
export {Slider}