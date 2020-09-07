// menu styling
let menuOne = document.getElementById("menu-item-18");
let menuTwo = document.getElementById("menu-item-19");
let menuThree = document.getElementById("menu-item-20");
let menuFour = document.getElementById("menu-item-225");
let menuBack = document.getElementById("drop-back");

document.getElementById("navTrigger").addEventListener("click", function() {
    this.classList.toggle("active");
    if (menuOne.style.visibility == "visible") {
        menuOne.style.visibility = "hidden";
        menuTwo.style.visibility = "hidden";
        menuThree.style.visibility = "hidden";
        menuFour.style.visibility = "hidden";
        menuBack.style.height = "4.5rem";
        menuBack.style.boxShadow = "none"
    } else {
        menuOne.style.visibility = "visible";
        menuTwo.style.visibility = "visible";
        menuThree.style.visibility = "visible";
        menuFour.style.visibility = "visible";
        menuBack.style.height = "19rem";
        menuBack.style.boxShadow = "-5px 5px 15px rgba(189, 189, 189, 0.397"
    }
}, false);

let mgMenu = document.getElementById("menu-item-17");
let mgLogo = mgMenu.firstChild;

if (mgMenu.classList.contains("current-menu-item") == true) {
    mgLogo.style.marginTop = "-1rem";
}

// search mage menu 
if (menuFour.classList.contains("current-menu-item") == true) {
    let backColor = document.getElementById("back-color");
    var theMenu = document.getElementById("mgmenu");
    let searchActive = document.getElementById("search-active");
    let backMenu = document.getElementById("menu-back");

    if (document.body.clientWidth > 515) {

        if (menuFour.classList.contains("current-menu-item") == true) {
            searchActive.style.display = "initial";
            backMenu.style.display = "inline-block";
            theMenu.style.backgroundColor = "unset";
            backColor.style.display = "none";
        } else {
            searchActive.style.display = "none";
            backMenu.style.display = "none";
            theMenu.style.backgroundColor = "var(--back)";
            backColor.style.display = "initial";
        }
    }
    if (menuFour.classList.contains("current-menu-item") == true) {
        backColor.style.height = "5rem";
    } else {
        backColor.style.height = "4.5rem";
    }
}


// projects microinteraction 
var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
if (sPage == 'projects') {
    var projElements = document.getElementsByClassName("card");
    
    for (let i = 0; i < projElements.length; i++) {
        projElements[i].addEventListener("mouseover", function () {
            hoverOn(projElements[i]);
        }, false);
    }

    function hoverOn (whichCard) {
        whichCard.classList.add("cardhover");
    }
    
    for (let i = 0; i < projElements.length; i++) {
        projElements[i].addEventListener("mouseout", function () {
            hoverOff(projElements[i]);
        }, false);
    }
    
    function hoverOff (whichCard) {
        whichCard.classList.remove("cardhover");
    }
}
