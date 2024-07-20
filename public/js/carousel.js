document.addEventListener('DOMContentLoaded', function() {
    var prevButton = document.querySelector('.carousel-control-prev');
    var nextButton = document.querySelector('.carousel-control-next');
    var images = document.querySelectorAll('.carousel-item');
    var currentIndex = 0;

    function showImage(index) {
        images.forEach(function(image, idx) {
            image.classList.remove('active');
            if (idx === index) {
                image.classList.add('active');
            }
        });
    }

    prevButton.addEventListener('click', function() {
        currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1;
        showImage(currentIndex);
    });

    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    });
});
