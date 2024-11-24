document.addEventListener('DOMContentLoaded', () => {
    const categoryLinks = document.querySelectorAll('#category-list a');
    const productCards = document.querySelectorAll('.product-card');

    function filterProducts(category) {
        productCards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'flex'; // Show the card
            } else {
                card.style.display = 'none'; // Hide the card
            }
        });
    }

    categoryLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior
            const category = link.getAttribute('data-category');
            filterProducts(category);
        });
    });

    // Show all products by default
    filterProducts('all');
});
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
    } else {
        console.error('Toggle button or sidebar element not found.');
    }
});
