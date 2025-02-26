const animatedElementL = document.querySelectorAll('.animate-fade-in-from-left');
const animatedElementR = document.querySelectorAll('.animate-fade-in-from-right');

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting)
        {
            entry.target.classList.add('active');
        }
        else
        {
            entry.target.classList.remove('active');
        }
    });
});

animatedElementL.forEach((element) => {
    observer.observe(element);
});

animatedElementR.forEach((element) => {
    observer.observe(element);
});
