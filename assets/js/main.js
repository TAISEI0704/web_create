// ハンバーガーメニューのスクロールを抑制する
const checkbox = document.getElementById('checkbox');

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        document.body.classList.add('no-scroll'); // スクロール禁止
        // console.log('check');
    } else {
        document.body.classList.remove('no-scroll'); // スクロール解除
        // console.log('uncheck');
    }
});





// workページ
const currentPath = window.location.pathname;

const links = document.querySelectorAll('#work-nav ul li a');

links.forEach(link => {
    const linkPath = new URL(link.getAttribute('href'), window.location.origin).pathname;
    if (linkPath === currentPath) {
        link.classList.add('active');
    }
});