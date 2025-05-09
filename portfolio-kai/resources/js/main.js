
    const scrollContainer = document.getElementById('projects-scroll');

    document.getElementById('scroll-left').addEventListener('click', () => {
    const width = scrollContainer.offsetWidth;
    scrollContainer.scrollBy({ left: -width, behavior: 'smooth' });
});

    document.getElementById('scroll-right').addEventListener('click', () => {
    const width = scrollContainer.offsetWidth;
    scrollContainer.scrollBy({ left: width, behavior: 'smooth' });
});

