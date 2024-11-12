// ハンバーガーメニューのスクロールを抑制する
const checkbox = document.getElementById('checkbox');
checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        document.body.classList.add('no-scroll'); // スクロール禁止
    } else {
        document.body.classList.remove('no-scroll'); // スクロール解除
    }
});

//sectionのフェードイン
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.fadeIn');
    function checkVisibility() {
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight - 300) {
                element.classList.add('active');
            }
        });
    }
    window.addEventListener('scroll', checkVisibility);
    checkVisibility();
});

// workページ
const currentPath = window.location.pathname.replace(/\/$/, "").replace(/\.\w+$/, "");
const links = document.querySelectorAll('#work-nav ul li a');
links.forEach(link => {
    const linkPath = new URL(link.getAttribute('href'), window.location.origin).pathname.replace(/\/$/, "").replace(/\.\w+$/, "");
    if (linkPath === currentPath) {
        link.classList.add('active');
    }
});

document.getElementById("work-nav-select").addEventListener("change", function() {
    window.location.href = this.value;
});