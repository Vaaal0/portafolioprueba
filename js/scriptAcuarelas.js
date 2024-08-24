document.addEventListener('DOMContentLoaded', function() {
    var galleryItems = document.querySelectorAll('.gallery-item');
    var popups = document.querySelectorAll('.popup');

    galleryItems.forEach(function(item, index) {
        item.addEventListener('click', function() {
            popups[index].classList.add('show');
        });
    });

    popups.forEach(function(popup) {
        popup.addEventListener('click', function(event) {
            if (event.target === popup) {
                popup.classList.remove('show');
            }
        });
    });
});