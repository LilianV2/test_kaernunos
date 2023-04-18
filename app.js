AOS.init();

const sousMenus = document.querySelectorAll('nav ul li ul.sous-menu');

for (let i = 0; i < sousMenus.length; i++) {
    sousMenus[i].parentNode.addEventListener('mouseenter', function() {
        this.querySelector('ul.sous-menu').style.display = 'block';
    });

    sousMenus[i].parentNode.addEventListener('mouseleave', function() {
        this.querySelector('ul.sous-menu').style.display = 'none';
    });
}