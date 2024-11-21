document.addEventListener('DOMContentLoaded', function() {
    const priceInput = document.querySelector('input[name="price"]');
    const discountInput = document.querySelector('input[name="discount_percentage"]');
    const discountedPriceInput = document.querySelector('#discounted_price');

    function calculateDiscountedPrice() {
        const price = parseFloat(priceInput.value) || 0;
        const discount = parseFloat(discountInput.value) || 0;
        const discountedPrice = price * (1 - discount / 100);
        discountedPriceInput.value = discountedPrice.toFixed(2);
    }

    priceInput.addEventListener('input', calculateDiscountedPrice);
    discountInput.addEventListener('input', calculateDiscountedPrice);
}); 