document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.logos-slide');
    const firstSlide = slider.firstElementChild;
    slider.appendChild(firstSlide.cloneNode(true));
});
