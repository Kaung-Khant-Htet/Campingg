let index = 0;
let autoSlideInterval;

function moveSlide(step) {
    const slides = document.querySelector(".slider");
    const totalSlides = slides.children.length;
    const slideWidth = slides.children[0].clientWidth;

    index = (index + step + totalSlides) % totalSlides;
    slides.style.transform = `translateX(-${index * slideWidth}px)`;
}

// Auto Slide Function
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        moveSlide(1);
    }, 3000); // Every 3 seconds
}

// Stop Auto Slide on Hover
function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

// Start Auto Slide when page loads
document.addEventListener("DOMContentLoaded", startAutoSlide);

// Stop Auto Slide when mouse enters slider
document.querySelector(".slider-container").addEventListener("mouseenter", stopAutoSlide);

// Resume Auto Slide when mouse leaves slider
document.querySelector(".slider-container").addEventListener("mouseleave", startAutoSlide);