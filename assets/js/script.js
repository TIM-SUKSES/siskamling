// JS Navbar Start
// element selector
const navButton = document.querySelector(".nav-button");
const menuContainer = document.querySelector(".menu-container");
const menuLinks = document.querySelectorAll(".menu-link");

// variable to toggle menuContainer
let showMenu = false;

// keep svg icon inside variables
const menuIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>`;
const closeIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>`;

// add menuIcon by deafult
navButton.innerHTML = menuIcon;

// functions
const toggleShowMenu = () => {
    showMenu = !showMenu;

    if (showMenu) {
    navButton.innerHTML = closeIcon;
    menuContainer.classList.add("show");
    } else {
    navButton.innerHTML = menuIcon;
    menuContainer.classList.remove("show");
    }
};

// event listener
navButton.addEventListener("click", toggleShowMenu);

// JS Navbar End



// JS Botton To Top Start
// To Top
const btnTop = document.getElementById('btn-to-top'); //Mendapatkan Button

// Menampilakan Button Ketika Scroll Dari Atas Lebih Dari 50px
window.addEventListener('scroll', function(){
    scrollFunction();
});

function scrollFunction(){
    if(
        document.body.scrollTop > 50 || document.documentElement.scrollTop > 50
    ) {
        btnTop.style.display = 'block';
    } else {
        btnTop.style.display = 'none';
    }
};

// Ketika Tombol Di Klik Maka Kembali Ke Atas
btnTop.addEventListener('click', backtoTop);

function backtoTop(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
// JS Botton To Top Start
