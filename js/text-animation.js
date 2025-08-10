window.onload = () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('active');
                }, index * 300);
            }
        });
    });

    // title-spanのアニメーション
    document.querySelectorAll('.title-span').forEach(element => {
        observer.observe(element);
    });

    // section-titleのアニメーション
    document.querySelectorAll('.section-title').forEach(element => {
        observer.observe(element);
    });
};