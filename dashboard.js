document.getElementById('show-home').addEventListener('click', function (event) {
    event.preventDefault();
    showSection('home');
});

document.getElementById('show-products').addEventListener('click', function (event) {
    event.preventDefault();
    showSection('products');
    loadProducts();
});

document.getElementById('show-analytics').addEventListener('click', function (event) {
    event.preventDefault();
    showSection('analytics');
    drawChart();
});

let products = [
    { id: 1, name: 'Stool Chair' },
    { id: 2, name: 'Desk Chair' },
    { id: 3, name: 'Table chair' }
];

function showSection(section) {
    document.querySelectorAll('.main-content > div').forEach(div => {
        div.style.display = 'none';
    });
    document.getElementById(section).style.display = 'block';
}

function loadProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');
        productDiv.innerHTML = `
            <span>${product.name}</span>
            <div>
                <button class="edit" onclick="editProduct(${product.id})">Edit</button>
                <button class="delete" onclick="deleteProduct(${product.id})">Delete</button>
            </div>
        `;
        productList.appendChild(productDiv);
    });
}



function editProduct(id) {
    const product = products.find(p => p.id === id);
    const newName = prompt('Edit product name:', product.name);
    if (newName) {
        product.name = newName;
        loadProducts();
    }
}

function deleteProduct(id) {
    if (confirm('Are you sure you want to delete this product?')) {
        products = products.filter(product => product.id !== id);
        loadProducts();
    }
}

function drawChart() {
    const ctx = document.getElementById('analytics-chart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Monthly Revenue',
                data: [3000, 4000, 2500, 5000, 6000],
                borderColor: 'rgba(52, 152, 219, 1)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
