<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍞 Online Bakery - Fresh Baked Goods</title>
    
    <!-- Font Awesome dla ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Dodatkowe style -->
    <link rel="stylesheet" href="styles.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .hero-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .hero-text h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .hero-image {
            text-align: center;
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .order-form {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-title h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .product-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: #667eea;
        }

        .product-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .product-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: #667eea;
        }

        .product-info h4 {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 5px;
        }

        .product-price {
            color: #28a745;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .quantity-input {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-input input {
            width: 80px;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            text-align: center;
        }

        .quantity-input input:focus {
            outline: none;
            border-color: #667eea;
        }

        .quantity-controls {
            display: flex;
            gap: 5px;
        }

        .quantity-btn {
            width: 35px;
            height: 35px;
            border: none;
            background: #667eea;
            color: white;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: #5a6fd8;
            transform: scale(1.1);
        }

        .special-offer {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .special-offer h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .special-offer p {
            opacity: 0.9;
        }

        .submit-section {
            text-align: center;
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            text-align: center;
            padding: 20px;
        }

        .feature i {
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 15px;
        }

        .feature h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .feature p {
            color: #666;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .hero-text h2 {
                font-size: 1.8rem;
            }
        }

        .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #667eea;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-bread-slice"></i> Online Bakery</h1>
            <p>Fresh baked goods delivered to your home</p>
        </div>

        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-text">
                    <h2>Best baked goods in town!</h2>
                    <p>Discover our traditional recipes and modern flavors. Every product is baked with love and the highest quality ingredients.</p>
                    <div class="features">
                        <div class="feature">
                            <i class="fas fa-clock"></i>
                            <h4>Fast Delivery</h4>
                            <p>Within 30 minutes</p>
                        </div>
                        <div class="feature">
                            <i class="fas fa-star"></i>
                            <h4>Highest Quality</h4>
                            <p>Fresh ingredients</p>
                        </div>
                        <div class="feature">
                            <i class="fas fa-heart"></i>
                            <h4>Baked with Love</h4>
                            <p>Traditional recipes</p>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=500&h=400&fit=crop" alt="Fresh baked goods">
                </div>
            </div>
        </div>

        <div class="order-form">
            <div class="form-title">
                <h3><i class="fas fa-shopping-cart"></i> Place Your Order</h3>
                <p>Choose the quantity of products and enjoy the taste!</p>
            </div>

            <div class="special-offer">
                <h4><i class="fas fa-gift"></i> Special Offer!</h4>
                <p>Order above €12 and get 10% discount! 🎉</p>
            </div>

            <form action="order.php" method="post" id="orderForm">
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-header">
                            <i class="fas fa-bread-slice product-icon"></i>
                            <div class="product-info">
                                <h4>Donuts</h4>
                                <div class="product-price">€0.25 each</div>
                            </div>
                        </div>
                        <div class="quantity-input">
                            <label>Quantity:</label>
                            <div class="quantity-controls">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('paczkow', -1)">-</button>
                                <input type="number" name="paczkow" id="paczkow" value="0" min="0" max="100">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('paczkow', 1)">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-header">
                            <i class="fas fa-cookie-bite product-icon"></i>
                            <div class="product-info">
                                <h4>Cookies</h4>
                                <div class="product-price">€0.30 each</div>
                            </div>
                        </div>
                        <div class="quantity-input">
                            <label>Quantity:</label>
                            <div class="quantity-controls">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('grzebieni', -1)">-</button>
                                <input type="number" name="grzebieni" id="grzebieni" value="0" min="0" max="100">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('grzebieni', 1)">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-header">
                            <i class="fas fa-birthday-cake product-icon"></i>
                            <div class="product-info">
                                <h4>Cakes</h4>
                                <div class="product-price">€4.00 each</div>
                            </div>
                        </div>
                        <div class="quantity-input">
                            <label>Quantity:</label>
                            <div class="quantity-controls">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('ciast', -1)">-</button>
                                <input type="number" name="ciast" id="ciast" value="0" min="0" max="10">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('ciast', 1)">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-header">
                            <i class="fas fa-coffee product-icon"></i>
                            <div class="product-info">
                                <h4>Coffee</h4>
                                <div class="product-price">€2.10 each</div>
                            </div>
                        </div>
                        <div class="quantity-input">
                            <label>Quantity:</label>
                            <div class="quantity-controls">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('kawy', -1)">-</button>
                                <input type="number" name="kawy" id="kawy" value="0" min="0" max="50">
                                <button type="button" class="quantity-btn" onclick="changeQuantity('kawy', 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="submit-section">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Submit Order
                    </button>
                </div>

                <div class="loading" id="loading">
                    <div class="spinner"></div>
                    <p>Processing order...</p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function changeQuantity(productId, change) {
            const input = document.getElementById(productId);
            let currentValue = parseInt(input.value) || 0;
            let newValue = currentValue + change;
            
            if (newValue < 0) newValue = 0;
            if (newValue > parseInt(input.max)) newValue = parseInt(input.max);
            
            input.value = newValue;
        }

        document.getElementById('orderForm').addEventListener('submit', function(e) {
            const paczkow = parseInt(document.getElementById('paczkow').value) || 0;
            const grzebieni = parseInt(document.getElementById('grzebieni').value) || 0;
            const ciast = parseInt(document.getElementById('ciast').value) || 0;
            const kawy = parseInt(document.getElementById('kawy').value) || 0;

            if (paczkow === 0 && grzebieni === 0 && ciast === 0 && kawy === 0) {
                e.preventDefault();
                alert('Please select at least one product!');
                return;
            }

            document.getElementById('loading').style.display = 'block';
        });

        // Animacja przy przewijaniu
        window.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                if (cardTop < window.innerHeight - 100) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });

        // Inicjalizacja animacji
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.product-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';
            });
        });
    </script>
    
    <!-- Dodatkowe funkcje JavaScript -->
    <script src="script.js"></script>
</body>
</html>
