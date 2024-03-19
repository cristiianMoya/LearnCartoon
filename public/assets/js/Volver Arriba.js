// ---------------Volver Arriba---------------
var goToTopButton = document.getElementById('go-to-top');

window.addEventListener('scroll', function() {
    if (document.documentElement.scrollTop > 100) {
        goToTopButton.classList.remove('hidden');
    } else {
        goToTopButton.classList.add('hidden');
    }
});

goToTopButton.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});