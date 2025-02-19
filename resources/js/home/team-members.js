let currentSlide = 0;
const carousel = document.getElementById('carousel');
const prevBtn = document.getElementById("team-prev");
const nextBtn = document.getElementById("team-next");
const slideCount = 3;
window.slide = slide;
window.goToSlide = goToSlide;


function slide(direction) {
    if (direction === 'next') {
        currentSlide = (currentSlide + 1) % slideCount;
    } else {
        currentSlide = (currentSlide - 1 + slideCount) % slideCount;
    }
    updateCarousel();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
}

function updateCarousel() {
    const offset = currentSlide * -100;
    carousel.style.transform = `translateX(${offset}%)`;
    updateDots();
}

function updateDots() {
    const dots = document.querySelectorAll('.rounded-full');
    dots.forEach((dot, index) => {
        dot.classList.toggle('bg-indigo-600', index === currentSlide);
        dot.classList.toggle('bg-gray-300', index !== currentSlide);
    });
}

setInterval(() => slide('next'), 5000);

document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') slide('prev');
    if (e.key === 'ArrowRight') slide('next');
});



