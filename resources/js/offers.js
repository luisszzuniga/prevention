var flickityInstance = null;

function initializeCarousel() {
    var mq = window.matchMedia("(max-width: 1025px)");

    if (mq.matches) {

        /*
             Déclaration de la variable $carousel en utilisant la sélection jQuery pour sélectionner la classe "carousel"
             et en lui appliquant les options de Flickity, notamment l'absence de points de pagination
        */

        var $carousel = $('.carousel').flickity({
            prevNextButtons: false,
            pageDots: false,
            initialIndex: 1
        });

        /* Récupération de l'objet Flickity associé à la variable $carousel */

        var flickity = $carousel.data('flickity');

        /*  Sélection des éléments avec la classe "gallery-nav" et stockage dans la variable $galleryNav
            Sélection des boutons contenus dans les éléments sélectionnés précédemment, stockage dans $galleryNavItems
         */

        var $galleryNav = $('.gallery-nav');
        var $galleryNavItems = $galleryNav.find('button');

        /*  Déclaration d'un gestionnaire d'évènement pour l'évènement "select" de Flickity sur l'objet $carousel
            Lorsque l'évènement est déclenché, la classe "is-selected" est retirée de l'élément actuellement sélectionné
            puis ajoutée à l'élément de navigation correspondant à l'index de l'élément sélectionné dans Flickity
        */

        $carousel.on('select.flickity', function () {
            $galleryNav.find('.is-selected').removeClass('is-selected');
            $galleryNavItems.eq(flickity.selectedIndex).addClass('is-selected');
        });

        /*  Déclaration d'un gestionnaire d'évènement pour les clics sur les boutons de la navigation
            Lorsqu'un bouton est cliqué, le carousel est mis à jour en sélectionnant l'élément correspondant à l'index du bouton cliqué
         */
        $galleryNav.on('click', 'button', function () {
            var index = $(this).index();
            $carousel.flickity('select', index);
        });
        flickityInstance = $carousel.data('flickity');
    } else {
        // Si Flickity est initialisé, détruisez l'instance
        if (flickityInstance) {
            flickityInstance.destroy();
            flickityInstance = null;
        }
    }
}

function updateDivClass() {
    if (window.innerWidth < 1025) {

        document.getElementById('box-under-title').classList.add('carousel');
        document.getElementById('box-under-title').classList.remove('box-under-title');

        document.getElementById('column-first-offer').classList.add('carousel-cell');
        document.getElementById('column-first-offer').classList.remove('column-first-offer');

        document.getElementById('column-second-offer').classList.add('carousel-cell');
        document.getElementById('column-second-offer').classList.remove('column-second-offer');

        document.getElementById('column-third-offer').classList.add('carousel-cell');
        document.getElementById('column-third-offer').classList.remove('column-third-offer');
    } else {

        document.getElementById('box-under-title').classList.add('box-under-title');
        document.getElementById('box-under-title').classList.remove('carousel');

        document.getElementById('column-first-offer').classList.add('column-first-offer');
        document.getElementById('column-first-offer').classList.remove('carousel-cell');

        document.getElementById('column-second-offer').classList.add('column-second-offer');
        document.getElementById('column-second-offer').classList.remove('carousel-cell');

        document.getElementById('column-third-offer').classList.add('column-third-offer');
        document.getElementById('column-third-offer').classList.remove('carousel-cell');
    }
}

window.addEventListener("load", function () {
    updateDivClass();
    initializeCarousel();
});

window.addEventListener("resize", function () {
    updateDivClass();
    initializeCarousel();
});
