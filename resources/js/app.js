import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

// Product Form Handling
document.addEventListener('DOMContentLoaded', function() {
    const productForms = document.querySelectorAll('.product-form');
    
    productForms.forEach(form => {
        const priceInput = form.querySelector('input[name="price"]');
        const discountInput = form.querySelector('input[name="discount_percentage"]');
        const discountedPriceInput = form.querySelector('#discounted_price');

        if (priceInput && discountInput && discountedPriceInput) {
            function calculateDiscountedPrice() {
                const price = parseFloat(priceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const discountedPrice = price - (price * discount / 100);
                discountedPriceInput.value = discountedPrice.toFixed(2);
            }

            priceInput.addEventListener('input', calculateDiscountedPrice);
            discountInput.addEventListener('input', calculateDiscountedPrice);
        }
    });

    // Image preview functionality
    const imageInputs = document.querySelectorAll('input[type="file"][name="images[]"]');
    imageInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const previewContainer = this.nextElementSibling;
            if (previewContainer) {
                previewContainer.innerHTML = '';
                [...e.target.files].forEach(file => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.createElement('div');
                        preview.className = 'relative group';
                        preview.innerHTML = `
                            <img src="${e.target.result}" 
                                 class="w-full h-32 object-cover rounded-lg" 
                                 alt="Preview" />
                        `;
                        previewContainer.appendChild(preview);
                    }
                    reader.readAsDataURL(file);
                });
            }
        });
    });
});

// Update countdown every second
function updateCountdown() {
    const targetDate = new Date('2024-11-29T00:00:00'); // Set your Black Friday date
    const now = new Date();
    const difference = targetDate - now;

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.querySelectorAll('.countdown span').forEach(span => {
        if (span.parentElement.nextElementSibling.textContent.includes('days')) {
            span.style.setProperty('--value', days);
        } else if (span.parentElement.nextElementSibling.textContent.includes('hours')) {
            span.style.setProperty('--value', hours);
        } else if (span.parentElement.nextElementSibling.textContent.includes('minutes')) {
            span.style.setProperty('--value', minutes);
        } else if (span.parentElement.nextElementSibling.textContent.includes('seconds')) {
            span.style.setProperty('--value', seconds);
        }
    });
}

// Update countdown immediately and then every second
updateCountdown();
setInterval(updateCountdown, 1000);
