function scrollMenu(sectionId, direction) {
    const menu = document.getElementById(sectionId);
    const scrollAmount = menu.offsetWidth;
    menu.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}