const toggle = document.getElementById('socialToggle');
const mainBtn = document.getElementById('mainToggle');
const socialIcons = document.getElementById('socialIcons');
const plusIcon = document.getElementById('messageToggleIcon');
let isOpen = false;

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

const handleScroll = debounce(() => {
    if (window.scrollY > 300) {
        toggle.classList.remove('opacity-0');
    } else {
        toggle.classList.add('opacity-0');
        if (isOpen) toggleMenu();
    }
}, 100);

function toggleMenu() {
    isOpen = !isOpen;
    plusIcon.style.transform = isOpen ? 'rotate(360deg)' : '';
    socialIcons.style.transform = isOpen ? 'scale(1)' : 'scale(0)';
    socialIcons.style.opacity = isOpen ? '1' : '0';
}

window.addEventListener('scroll', handleScroll);
mainBtn.addEventListener('click', toggleMenu);

document.addEventListener('click', (e) => {
    if (isOpen && !toggle.contains(e.target)) {
        toggleMenu();
    }
});
