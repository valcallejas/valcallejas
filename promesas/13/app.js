function cargarImagen(url) {
  return new Promise((resolver, rechazar) => {
    const img = new Image();
    img.src = url;
    img.onload = () => resolver(img);
    img.onerror = () => rechazar(`❌ Error al cargar: ${url}`);
  });
}

const btnCargar = document.getElementById("btnCargar");
const estado = document.getElementById("estado");
const contenedor = document.getElementById("contenedorImagenes");

btnCargar.addEventListener("click", () => {
  estado.textContent = "⏳ Cargando imágenes...";
  contenedor.innerHTML = "";

  const urls = [
    "https://picsum.photos/200?random=1",
    "https://picsum.photos/200?random=2",
    "https://picsum.photos/200?random=3",
    "https://picsum.photos/200?random=4",
    "https://picsum.photos/200?random=5"
  ];

  Promise.all(urls.map(url => cargarImagen(url)))
    .then(imagenes => {
      estado.textContent = "✅ Imágenes cargadas exitosamente.";
      imagenes.forEach(img => {
        img.classList.add("rounded-xl", "shadow", "w-full");
        contenedor.appendChild(img);
      });
    })
    .catch(error => {
      estado.textContent = error;
      estado.classList.add("text-red-600");
    });
});
