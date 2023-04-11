const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const animableElements = document.querySelectorAll('.anim-from-left, .anim-from-right');
animableElements.forEach((el) => observer.observe(el));