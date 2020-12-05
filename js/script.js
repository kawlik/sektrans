//  Importowanie plików źródłowych
import * as m from "./c_menu.js";
import * as p from "./c_page.js";
import * as s from "./c_slider.js";


const tiles = document.querySelectorAll(".tile");
console.log(tiles);
tiles.forEach((tile, index) => {
    if(tile.style.animation) {
        tile.style.animation = "";
    } else {
        tile.style.animation = `tileAnim 1.2s ease-in-out forwards ${index/5 + 0.1}s`;
    }
});

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
