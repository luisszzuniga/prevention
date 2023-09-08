import roadImage from './images/home/road.jpg';
import truckImage from './images/home/truck.jpg';

$(document).ready(function() {
    const images = [roadImage, truckImage];
    const randomIndex = Math.floor(Math.random() * images.length);
    const imageUrl = images[randomIndex];
    const img = new Image();
    img.src = imageUrl;

    img.onload = function() {
        $('.slider-height').css('background-image', 'linear-gradient(90deg, rgba(10,27,47,1) 0%, rgba(16,32,52,0.9344070391828606) 33%, rgba(47,62,80,0.46381880388874297) 100%), url(' + imageUrl + ')');
    };

    img.onerror = function() {
        $('.slider-height').css('background-image', 'linear-gradient(90deg, rgba(10,27,47,1) 0%, rgba(16,32,52,0.9344070391828606) 33%, rgba(47,62,80,0.46381880388874297) 100%)');
    };
});

document.addEventListener('DOMContentLoaded', function() {
    const computer = document.getElementById('computer');
    const database = document.getElementById('database');
    const dashcam = document.getElementById('dashcam');

    const cat1 = document.getElementById('cat-1');
    const cat2 = document.getElementById('cat-2');
    const cat3 = document.getElementById('cat-3');

    const timeToCoordinateImages = 300;

    function switchImagesOrangetoWhite(element, image) {
        let timeout;
        element.addEventListener('mouseenter', function() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                image.src = 'images/home/services/' + image.id + '-w.png';
            }, timeToCoordinateImages);
        });

        element.addEventListener('mouseleave', function() {
            clearTimeout(timeout);
            image.src = 'images/home/services/' + image.id + '.png';
        });
    }

    switchImagesOrangetoWhite(cat1, computer);
    switchImagesOrangetoWhite(cat2, database);
    switchImagesOrangetoWhite(cat3, dashcam);
});
