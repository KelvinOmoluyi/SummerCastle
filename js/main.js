let burgerBtn = document.querySelector(".burger-menu-btn");
let burgerMenu = document.querySelector(".glass-menu");

let isBurgerOpen = false;

burgerBtn.onclick = function () {
    if(!isBurgerOpen) {
        burgerMenu.style.display = "block";
        burgerBtn.style.backgroundPosition = "center left 3.5rem, center";
        isBurgerOpen = true;
    }
    else if (isBurgerOpen) {
        burgerMenu.style.display = "none";
        burgerBtn.style.backgroundPosition = "center, center left 3.5rem";
        isBurgerOpen = false;
    }
}
