document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');
    const totalItems = items.length;
    let currentIndex = 0;
    
    function showSlide(index) {
        if (index >= totalItems) currentIndex = 0;
        else if (index < 0) currentIndex = totalItems - 1;
        else currentIndex = index;
    
        const offset = -currentIndex * 100;
        document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
    }
    
    function prevSlide() {
        showSlide(currentIndex - 1);
    }
    
    function nextSlide() {
        showSlide(currentIndex + 1);
    }
    
    prevButton.addEventListener('click', prevSlide);
    nextButton.addEventListener('click', nextSlide);
    
    function autoPlay() {
        nextSlide();
    }
    
    setInterval(autoPlay, 3000); // Change slide every 3 seconds
    
    showSlide(currentIndex); // Initial call to display the first slide
});
document.addEventListener('DOMContentLoaded', function () {
    const sliderInner = document.querySelector('.slider-inner');
    const items = document.querySelectorAll('.slider-item');
    const totalItems = items.length;
    const slidesToShow = 3;
    const itemWidth = 100 / slidesToShow; // Width percentage for each item

    function showSlide(index) {
        const maxIndex = totalItems - slidesToShow;
        if (index > maxIndex) index = 0;
        else if (index < 0) index = maxIndex;
        currentIndex = index;
        const offset = -currentIndex * itemWidth;
        sliderInner.style.transform = `translateX(${offset}%)`;
    }

    function autoPlay() {
        showSlide(currentIndex + 1);
    }

    let currentIndex = 0;
    setInterval(autoPlay, 3000); // Change slide every 3 seconds
    showSlide(currentIndex); // Initial call to display the first slide
});

document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector('.navb .all-cat');
    const menu = document.querySelector('.navb');

    button.addEventListener('click', function() {
        menu.classList.toggle('open');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.remove('open');
        }
    });
});



