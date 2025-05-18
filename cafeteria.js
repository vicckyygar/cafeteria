// Botón hamburguesa toggle con aria-expanded dinámico
const btnHamburguesa = document.getElementById('btn-hamburguesa');
const menuLista = document.getElementById('menu-lista');

btnHamburguesa.addEventListener('click', () => {
  const isExpanded = btnHamburguesa.getAttribute('aria-expanded') === 'true';
  btnHamburguesa.setAttribute('aria-expanded', String(!isExpanded));
  menuLista.classList.toggle('show');
});


// Cierra menú al click en link y actualiza aria-expanded
menuLista.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    if (menuLista.classList.contains('show')) {
      menuLista.classList.remove('show');
      btnHamburguesa.setAttribute('aria-expanded', 'false');
    }
  });
});

// Observer para animar/promociones cuando entran en viewport
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      entry.target.classList.remove('hidden');
      observer.unobserve(entry.target); // Sólo animar una vez
    }
  });
}, { threshold: 0.2 });

document.querySelectorAll('.promociones.hidden').forEach(el => {
  observer.observe(el);
});

// Función para inicializar Google Maps, debes llamarla desde el callback del script de Google Maps
function initMap() {
  const location = { lat: -31.42008, lng: -64.19169 }; // Coordenadas reales de tu local
  const map = new google.maps.Map(document.getElementById("mapa").querySelector("iframe"), {
    zoom: 15,
    center: location,
  });
  const marker = new google.maps.Marker({
    position: location,
    map: map,
    title: "Confitería Dulce Cielo & Cafetería Las Tortas",
  });
}
