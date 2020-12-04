//  Importowanie plików źródłowych
import * as m from "./c_menu.js";
import * as p from "./c_page.js";
import * as s from "./c_slider.js";



//  Elementy procedowane po załadowaniu zawartości
document.addEventListener("DOMContentLoaded", () => {

    //  Sformatowanie menu strony
    const siteMenu = new m.Menu(".menu");

    //  Sformatowanie listy i artyułów
    const pageArticle = new p.Article(".page-article");
    const pageList = new p.List(".page-list");

    //  Sformatowanie slidera strony
    const homeSlider = new s.Slider(".slider");
});
