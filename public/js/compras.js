var currentIndex = 0;
var items = document.querySelectorAll(".carousel-item");
var descriptions = document.querySelectorAll(".carousel-description");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");

function showImage(index) {
  items.forEach(function (item) {
    item.style.display = "none";
  });
  descriptions.forEach(function (desc) {
    desc.classList.remove("active");
  });

  items[index].style.display = ""; //flex
  descriptions[index].classList.add("active");
}

showImage(currentIndex);

prevBtn.addEventListener("click", function () {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  showImage(currentIndex);
});

nextBtn.addEventListener("click", function () {
  currentIndex = (currentIndex + 1) % items.length;
  showImage(currentIndex);
});

/*FUNCIONALIDAD DEL CARRITO DE COMPRAS */
// JavaScript para mostrar y ocultar el carrito
const mostrarCarritoBtn = document.getElementById("mostrarCarrito");
const carritoContainer = document.querySelector(".carrito-container");

mostrarCarritoBtn.addEventListener("click", () => {
  carritoContainer.style.display = "block";
});

carritoContainer.addEventListener("click", (event) => {
  if (event.target === carritoContainer) {
    carritoContainer.style.display = "none";
  }
});

// Obtener todos los botones "Añadir" del carrusel
const addToCartButtons = document.querySelectorAll(".add-to-cart");

// Elementos del carrito
const carritoLista = document.getElementById("carrito-lista");
const carritoTotal = document.getElementById("carrito-total");
const carritoCantidad = document.getElementById("carrito-cantidad");

// Inicializar el carrito como un arreglo vacío
let carrito = [];

// Función para actualizar el carrito y la vista del carrito
function actualizarCarrito() {
  // Limpiar la vista del carrito
  carritoLista.innerHTML = "";

  // Calcular el total
  let total = 0;

  // Recorrer el carrito y agregar cada producto al carrito
  carrito.forEach((producto, index) => {
    const listItem = document.createElement("li");
    listItem.innerHTML = `
      <span>${producto.nombre}</span>
      <span>S/.${producto.precio.toFixed(2)}</span>
      <button class="eliminar" data-index="${index}">Eliminar</button>
    `;
    carritoLista.appendChild(listItem);

    // Sumar el precio del producto al total
    total += producto.precio;
  });

  // Actualizar la cantidad en el botón de carrito
  carritoCantidad.textContent = carrito.length;

  // Actualizar el total en la vista
  carritoTotal.textContent = `Total: S/.${total.toFixed(2)}`;
}

// Manejar el clic en los botones "Añadir"
addToCartButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    // Obtener los datos del producto desde el carrusel
    const nombre = document.querySelectorAll(".nombre")[index].textContent;
    const precioTexto = document.querySelectorAll(".precio")[index].textContent;
    const precio = parseFloat(precioTexto.replace("S/.", "").replace(",", "")); // Convertir el precio a número

    // Agregar el producto al carrito
    carrito.push({
      nombre,
      precio,
    });

    // Actualizar el carrito y la vista del carrito
    actualizarCarrito();
  });
});

// Manejar la eliminación de productos del carrito
carritoLista.addEventListener("click", (event) => {
  if (event.target.classList.contains("eliminar")) {
    const index = event.target.getAttribute("data-index");
    carrito.splice(index, 1);
    actualizarCarrito();
  }
});

// Botón para vaciar el carrito
const vaciarCarritoBtn = document.getElementById("vaciar-carrito");

vaciarCarritoBtn.addEventListener("click", () => {
  carrito = []; // Vaciar el carrito
  actualizarCarrito(); // Actualizar la vista del carrito
});

// Botón para pagar (puedes agregar la funcionalidad deseada aquí)
// Botón para pagar (puedes agregar la funcionalidad deseada aquí)
const pagarBtn = document.getElementById("pagar");

pagarBtn.addEventListener("click", () => {
  // Calcular el total del carrito
  const total = carrito.reduce((acc, producto) => acc + producto.precio, 0);

  // Construir un objeto URLSearchParams con los datos del carrito y el total
  const params = new URLSearchParams();
  params.append("total", total);

  carrito.forEach((producto, index) => {
    params.append(`nombre[${index}]`, producto.nombre);
    params.append(`precio[${index}]`, producto.precio);
  });

  // Redirigir a la página "pago.php" con los datos del carrito y el total en la URL
  window.location.href = `pago.php?${params.toString()}`;
});

// Inicializar el carrito y la vista del carrito
actualizarCarrito();
