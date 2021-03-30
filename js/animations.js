function ScrollVersLeBas() {
    let SectionProjet = document.querySelector("#le-projet");
    SectionProjet.scrollIntoView({behavior: 'smooth'});

}

function ScrollHaut() {
    let HautPage = document.querySelector("body > header");
    HautPage.scrollIntoView({behavior: 'smooth', block: 'end'});
}