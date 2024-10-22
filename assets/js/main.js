const currentPath = window.location.pathname;

const links = document.querySelectorAll('#work-nav ul li a');

links.forEach(link => {
    const linkPath = new URL(link.getAttribute('href'), window.location.origin).pathname;

    if (linkPath === currentPath) {
        link.classList.add('active');
    }
});