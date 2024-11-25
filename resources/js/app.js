import './bootstrap';
import Swal from 'sweetalert2'

// Livewire notification handler
document.addEventListener('livewire:initialized', () => {
    
    Livewire.on('notify', (message) => {
        const notificationMessage = Array.isArray(message) ? message[0] : message;
        
        Swal.fire({
            icon: 'success',
            title: notificationMessage,
            toast: true,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#000000',          // base-100 color
            color: '#FFD700',              // primary color for text
            iconColor: '#FFD700',          // primary/success color for icon
            customClass: {
                popup: 'colored-toast',
                title: 'text-sm font-semibold',
                timerProgressBar: 'bg-[#FFA500]' // secondary color for progress bar
            },
            showClass: {
                popup: 'animate__animated animate__fadeInRight'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutRight'
            },
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                // Style the progress bar
                const progressBar = toast.querySelector('.swal2-timer-progress-bar');
                if (progressBar) {
                    progressBar.style.backgroundColor = '#FFA500'; // secondary color
                }
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Product Form Handling
    const productForms = document.querySelectorAll('.product-form');
    
    if (productForms.length > 0) {
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
    }

    // Image preview functionality
    const imageInputs = document.querySelectorAll('input[type="file"][name="images[]"]');
    if (imageInputs.length > 0) {
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
    }

    // Countdown functionality
    const countdownElements = document.querySelectorAll('.countdown span');
    if (countdownElements.length > 0) {
        function updateCountdown() {
            const targetDate = new Date('2024-11-29T00:00:00'); // Set your Black Friday date
            const now = new Date();
            const difference = targetDate - now;

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            countdownElements.forEach(span => {
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
    }
});
