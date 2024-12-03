// Productos de ejemplo
const product = [
    { name: 'iPhone 14', price: '$999' },
    { name: 'Samsung Galaxy S23', price: '$850' },
    { name: 'Xiaomi Mi 12', price: '$600' },
    { name: 'Huawei P50', price: '$700' }
];

// Función para cargar productos dinámicamente
function loadProducts() {
    const productGrid = document.querySelector('.product-grid');
    product.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');
        productDiv.innerHTML = `<h3>${product.name}</h3><p>${product.price}</p>`;
        productGrid.appendChild(productDiv);
    });
}

// Lógica para manejar el formulario de contacto
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Simulación de envío de datos
    document.getElementById('formResponse').innerText = `Gracias, ${name}. Tu mensaje ha sido enviado.`;
    this.reset();
});

// Cargar productos al cargar la página
window.onload = loadProducts;