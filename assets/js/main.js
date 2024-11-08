// Simple add-to-cart interaction
document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.add-to-cart');

    cartButtons.forEach(button => {
        button.addEventListener('click', event => {
            const productId = event.target.getAttribute('data-product-id');
            addToCart(productId);
            alert("Product added to cart!");
        });
    });
});

function addToCart(productId) {
    // This could be an AJAX request in a real app
    console.log(`Product ${productId} added to cart`);
}
