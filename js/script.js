//  Importowanie plików źródłowych
import * as m from "./c_menu.js";
import * as p from "./c_page.js";
import * as f from "./c_form.js";
import * as t from "./c_tiles.js";
import * as s from "./c_slider.js";
import * as c from "./c_cookie.js";





//  Elementy procedowane po załadowaniu zawartości
document.addEventListener("DOMContentLoaded", () => {

    //  Informacje o cookies
    const cookies = new c.Cookie(".cookie");

    //  Sformatowanie menu strony
    const siteMenu = new m.Menu(".menu");

    //  Sformatowanie listy, artyułów, kafelef
    const pageArticle = new p.Article(".page-article");
    const pageList = new p.List(".page-list");

    //  Sformatowanie slidera strony
    const homeSlider = new s.Slider(".slider");

    //  Sformatowanie kafelek strony głównej
    const Tiles = new t.Tiles(".tiles");

    //  Obsługa fromularza
    const pageForm = new f.Form(".form-rows");
    const formElem = new f.FormElem(".forms-list-elem")
});
