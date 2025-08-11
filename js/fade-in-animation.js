// フェードインアニメーション
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer API を使用してスクロール時のアニメーションを実装
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // .fade-in クラスを持つ全ての要素を監視
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(element => {
        observer.observe(element);
    });
});
