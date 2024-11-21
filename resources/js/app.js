import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

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
