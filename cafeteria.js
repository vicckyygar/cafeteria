function scrollMenu(direction) {
    const menu = document.querySelector('.menu');
    const scrollAmount = 100; // Cantidad de desplazamiento
    menu.scrollLeft += direction * scrollAmount;
  }