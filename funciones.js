function showProducts(category) {
    const products = document.querySelectorAll('.producto');

    products.forEach(product => {
        if (category === 'todo') {
            product.style.display = 'block';
        } else {
            const productCategory = product.getAttribute('data-category');
            if (productCategory === category) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        }
    });
}


