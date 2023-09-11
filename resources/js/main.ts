document.addEventListener('DOMContentLoaded', () => {
    // 2. sticky And Scroll UP
    window.addEventListener('scroll', function() {
        const scroll = window.scrollY;
        const headerSticky = document.querySelector('.header-sticky');
        const backTop = document.getElementById('back-top');

        if (scroll < 400) {
            if (headerSticky) headerSticky.classList.remove("sticky-bar");
            if (backTop) backTop.style.display = "none";
        } else {
            if (headerSticky) headerSticky.classList.add("sticky-bar");
            if (backTop) backTop.style.display = "block";
        }
    });

    // Scroll Up
    const backTopLink = document.querySelector('#back-top a');
    if (backTopLink) {
        backTopLink.addEventListener("click", function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

});

document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const overlay = document.getElementById('menu');

    if (burgerMenu && overlay) {
        burgerMenu.addEventListener('click', function() {
            burgerMenu.classList.toggle("close");
            overlay.classList.toggle("overlay");
        });
    }
});

export {}
