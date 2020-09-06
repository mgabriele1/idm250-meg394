let card1 = document.getElementById("card1");
let card2 = document.getElementById("card2");

card1.addEventListener("mouseover", function () {
    hoverOn(card1);
}, false);

card2.addEventListener("mouseover", function () {
    hoverOn(card2);
}, false);

function hoverOn (whichCard) {
    whichCard.classList.add("cardhover");
}


card1.addEventListener("mouseout", function () {
    hoverOff(card1);
}, false);

card2.addEventListener("mouseout", function () {
    hoverOff(card2);
}, false);

function hoverOff (whichCard) {
    whichCard.classList.remove("cardhover");
}