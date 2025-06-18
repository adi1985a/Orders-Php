// Dodatkowe funkcje JavaScript dla piekarni online

// Funkcja do obsługi zmiany ilości produktów
function changeQuantity(productId, change) {
    const input = document.getElementById(productId);
    let currentValue = parseInt(input.value) || 0;
    let newValue = currentValue + change;
    
    if (newValue < 0) newValue = 0;
    if (newValue > parseInt(input.max)) newValue = parseInt(input.max);
    
    input.value = newValue;
    
    // Dodaj animację przy zmianie
    input.style.transform = 'scale(1.1)';
    setTimeout(() => {
        input.style.transform = 'scale(1)';
    }, 200);
    
    // Aktualizuj podsumowanie w czasie rzeczywistym
    updateOrderSummary();
}

// Funkcja do aktualizacji podsumowania zamówienia w czasie rzeczywistym
function updateOrderSummary() {
    const paczkow = parseInt(document.getElementById('paczkow')?.value) || 0;
    const grzebieni = parseInt(document.getElementById('grzebieni')?.value) || 0;
    const ciast = parseInt(document.getElementById('ciast')?.value) || 0;
    const kawy = parseInt(document.getElementById('kawy')?.value) || 0;
    
    const suma = (0.25 * paczkow) + (0.30 * grzebieni) + (4.00 * ciast) + (2.10 * kawy);
    
    // Pokaż/ukryj specjalną ofertę
    const specialOffer = document.querySelector('.special-offer');
    if (specialOffer) {
        // Reklama zawsze widoczna
        specialOffer.style.display = 'block';
        
        // Dodaj animację tylko gdy suma >= 12
        if (suma >= 12) {
            specialOffer.classList.add('animate-pulse');
        } else {
            specialOffer.classList.remove('animate-pulse');
        }
    }
    
    // Aktualizuj licznik produktów
    updateProductCounter();
}

// Funkcja do aktualizacji licznika produktów
function updateProductCounter() {
    const inputs = ['paczkow', 'grzebieni', 'ciast', 'kawy'];
    let totalItems = 0;
    
    inputs.forEach(id => {
        const input = document.getElementById(id);
        if (input) {
            totalItems += parseInt(input.value) || 0;
        }
    });
    
    // Pokaż licznik w przycisku submit
    const submitBtn = document.querySelector('.submit-btn');
    if (submitBtn) {
        if (totalItems > 0) {
            submitBtn.innerHTML = `<i class="fas fa-paper-plane"></i> Submit Order (${totalItems} products)`;
        } else {
            submitBtn.innerHTML = `<i class="fas fa-paper-plane"></i> Submit Order`;
        }
    }
}

// Funkcja do walidacji formularza
function validateForm() {
    const paczkow = parseInt(document.getElementById('paczkow')?.value) || 0;
    const grzebieni = parseInt(document.getElementById('grzebieni')?.value) || 0;
    const ciast = parseInt(document.getElementById('ciast')?.value) || 0;
    const kawy = parseInt(document.getElementById('kawy')?.value) || 0;

    if (paczkow === 0 && grzebieni === 0 && ciast === 0 && kawy === 0) {
        showNotification('Please select at least one product!', 'error');
        return false;
    }
    
    return true;
}

// Funkcja do wyświetlania powiadomień
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : 'info-circle'}"></i>
        <span>${message}</span>
        <button onclick="this.parentElement.remove()">×</button>
    `;
    
    // Dodaj style
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'error' ? '#ff6b6b' : '#667eea'};
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        z-index: 1000;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: slideInRight 0.5s ease-out;
        max-width: 300px;
    `;
    
    document.body.appendChild(notification);
    
    // Usuń po 5 sekundach
    setTimeout(() => {
        if (notification.parentElement) {
            notification.remove();
        }
    }, 5000);
}

// Funkcja do potwierdzenia zamówienia
function confirmOrder() {
    const paczkow = parseInt(document.getElementById('paczkow')?.value) || 0;
    const grzebieni = parseInt(document.getElementById('grzebieni')?.value) || 0;
    const ciast = parseInt(document.getElementById('ciast')?.value) || 0;
    const kawy = parseInt(document.getElementById('kawy')?.value) || 0;
    
    const suma = (0.25 * paczkow) + (0.30 * grzebieni) + (4.00 * ciast) + (2.10 * kawy);
    const orderNumber = Math.floor(Math.random() * 10000);
    
    const message = `Thank you for your order! 🎉

Your order has been accepted and is being prepared.

Order number: #${orderNumber}
Order value: €${suma.toFixed(2)}

You will receive a notification about the delivery status.`;
    
    alert(message);
}

// Funkcja do animacji przy przewijaniu
function animateOnScroll() {
    const elements = document.querySelectorAll('.product-card, .feature, .hero-text, .hero-image');
    
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        
        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('animate-fade-in-up');
        }
    });
}

// Funkcja do obsługi klawiatury
function handleKeyboardInput() {
    document.addEventListener('keydown', function(e) {
        // Enter na przycisku submit
        if (e.key === 'Enter' && e.target.type === 'number') {
            e.preventDefault();
            const form = document.getElementById('orderForm');
            if (form) {
                form.dispatchEvent(new Event('submit'));
            }
        }
        
        // Strzałki do zmiany ilości
        if (e.target.type === 'number') {
            const productId = e.target.id;
            if (e.key === 'ArrowUp') {
                e.preventDefault();
                changeQuantity(productId, 1);
            } else if (e.key === 'ArrowDown') {
                e.preventDefault();
                changeQuantity(productId, -1);
            }
        }
    });
}

// Funkcja do obsługi gestów dotykowych
function handleTouchGestures() {
    let startY = 0;
    let startX = 0;
    
    document.addEventListener('touchstart', function(e) {
        startY = e.touches[0].clientY;
        startX = e.touches[0].clientX;
    });
    
    document.addEventListener('touchend', function(e) {
        const endY = e.changedTouches[0].clientY;
        const endX = e.changedTouches[0].clientX;
        const diffY = startY - endY;
        const diffX = startX - endX;
        
        // Swipe up na kartach produktów
        if (Math.abs(diffY) > 50 && Math.abs(diffY) > Math.abs(diffX)) {
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                if (cardTop < window.innerHeight && cardTop > 0) {
                    card.style.transform = 'translateY(-10px)';
                    setTimeout(() => {
                        card.style.transform = 'translateY(0)';
                    }, 300);
                }
            });
        }
    });
}

// Funkcja do obsługi motywu (jasny/ciemny)
function toggleTheme() {
    const body = document.body;
    const currentTheme = body.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    
    body.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    
    // Dodaj animację przejścia
    body.style.transition = 'all 0.3s ease';
}

// Funkcja do inicjalizacji motywu
function initTheme() {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.body.setAttribute('data-theme', savedTheme);
}

// Funkcja do obsługi formularza
function handleFormSubmit() {
    const form = document.getElementById('orderForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                return;
            }
            
            // Pokaż loading
            const loading = document.getElementById('loading');
            if (loading) {
                loading.style.display = 'block';
            }
            
            // Symulacja opóźnienia
            setTimeout(() => {
                // Formularz zostanie wysłany
            }, 1000);
        });
    }
}

// Funkcja do inicjalizacji wszystkich funkcji
function initApp() {
    // Inicjalizacja motywu
    initTheme();
    
    // Obsługa formularza
    handleFormSubmit();
    
    // Obsługa klawiatury
    handleKeyboardInput();
    
    // Obsługa gestów dotykowych
    handleTouchGestures();
    
    // Animacje przy przewijaniu
    window.addEventListener('scroll', animateOnScroll);
    
    // Inicjalne animacje
    animateOnScroll();
    
    // Aktualizacja podsumowania
    updateOrderSummary();
    
    // Dodaj nasłuchiwanie zmian w inputach
    const inputs = ['paczkow', 'grzebieni', 'ciast', 'kawy'];
    inputs.forEach(id => {
        const input = document.getElementById(id);
        if (input) {
            input.addEventListener('input', updateOrderSummary);
        }
    });
    
    console.log('🍞 Piekarnia Online - Aplikacja zainicjalizowana!');
}

// Inicjalizacja po załadowaniu DOM
document.addEventListener('DOMContentLoaded', initApp);

// Dodatkowe funkcje dla strony podsumowania
if (window.location.pathname.includes('order.php')) {
    // Animacja sukcesu dla strony podsumowania
    document.addEventListener('DOMContentLoaded', function() {
        const summary = document.querySelector('.order-summary');
        if (summary) {
            summary.classList.add('success-animation');
        }
        
        // Dodanie efektu hover na przyciski
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
}

// Funkcja do eksportu danych zamówienia
function exportOrderData() {
    const paczkow = parseInt(document.getElementById('paczkow')?.value) || 0;
    const grzebieni = parseInt(document.getElementById('grzebieni')?.value) || 0;
    const ciast = parseInt(document.getElementById('ciast')?.value) || 0;
    const kawy = parseInt(document.getElementById('kawy')?.value) || 0;
    
    const orderData = {
        products: {
            donuts: { quantity: paczkow, price: 0.25 },
            cookies: { quantity: grzebieni, price: 0.30 },
            cakes: { quantity: ciast, price: 4.00 },
            coffee: { quantity: kawy, price: 2.10 }
        },
        total: (0.25 * paczkow) + (0.30 * grzebieni) + (4.00 * ciast) + (2.10 * kawy),
        timestamp: new Date().toISOString()
    };
    
    const dataStr = JSON.stringify(orderData, null, 2);
    const dataBlob = new Blob([dataStr], {type: 'application/json'});
    const url = URL.createObjectURL(dataBlob);
    
    const link = document.createElement('a');
    link.href = url;
    link.download = 'order.json';
    link.click();
    
    URL.revokeObjectURL(url);
    showNotification('Order data has been exported!', 'info');
}

// Funkcja do resetowania formularza
function resetForm() {
    const inputs = ['paczkow', 'grzebieni', 'ciast', 'kawy'];
    inputs.forEach(id => {
        const input = document.getElementById(id);
        if (input) {
            input.value = 0;
        }
    });
    
    updateOrderSummary();
    showNotification('Form has been reset!', 'info');
}
