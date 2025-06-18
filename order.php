<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📋 Order Summary - Online Bakery</title>
    
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
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .order-summary {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .summary-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .summary-header h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .summary-header p {
            color: #666;
            font-size: 1.1rem;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .order-table th {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 20px;
            text-align: left;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .order-table td {
            padding: 20px;
            border-bottom: 1px solid #eee;
            font-size: 1rem;
        }

        .order-table tr:last-child td {
            border-bottom: none;
        }

        .order-table tr:hover {
            background: #f8f9fa;
        }

        .product-row {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-icon {
            font-size: 1.5rem;
            color: #667eea;
            width: 40px;
            text-align: center;
        }

        .product-info h4 {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .product-price {
            color: #666;
            font-size: 0.9rem;
        }

        .quantity-badge {
            background: #667eea;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .total-row {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
            color: white;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .total-row td {
            color: white;
        }

        .discount-info {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .discount-info h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .discount-info p {
            opacity: 0.9;
        }

        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            box-shadow: 0 10px 20px rgba(108, 117, 125, 0.3);
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(108, 117, 125, 0.4);
        }

        .order-image {
            text-align: center;
            margin-top: 30px;
        }

        .order-image img {
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            text-align: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            color: white;
        }

        .feature i {
            font-size: 2rem;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .feature h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .feature p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        .success-animation {
            animation: successPulse 2s ease-in-out;
        }

        @keyframes successPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-check-circle"></i> Order Placed!</h1>
            <p>Thank you for choosing our bakery</p>
        </div>

        <?php
        $paczkow = isset($_POST['paczkow']) ? (int)$_POST['paczkow'] : 0;
        $grzebieni = isset($_POST['grzebieni']) ? (int)$_POST['grzebieni'] : 0;
        $ciast = isset($_POST['ciast']) ? (int)$_POST['ciast'] : 0;
        $kawy = isset($_POST['kawy']) ? (int)$_POST['kawy'] : 0;
        
        $suma_paczkow = 0.25 * $paczkow;
        $suma_grzebieni = 0.30 * $grzebieni;
        $suma_ciast = 4.00 * $ciast;
        $suma_kawy = 2.10 * $kawy;
        $suma = $suma_paczkow + $suma_grzebieni + $suma_ciast + $suma_kawy;
        
        $rabat = 0;
        $suma_po_rabacie = $suma;
        
        if ($suma >= 12) {
            $rabat = $suma * 0.10;
            $suma_po_rabacie = $suma - $rabat;
        }
        ?>

        <div class="order-summary success-animation">
            <div class="summary-header">
                <h2><i class="fas fa-receipt"></i> Order Summary</h2>
                <p>Check the details of your order</p>
            </div>

            <?php if ($rabat > 0): ?>
            <div class="discount-info">
                <h4><i class="fas fa-gift"></i> Congratulations! You get a discount!</h4>
                <p>For orders above €12 you get 10% discount! 🎉</p>
            </div>
            <?php endif; ?>

            <table class="order-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($paczkow > 0): ?>
                    <tr>
                        <td>
                            <div class="product-row">
                                <i class="fas fa-bread-slice product-icon"></i>
                                <div class="product-info">
                                    <h4>Donuts</h4>
                                    <div class="product-price">Fresh and delicious</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="quantity-badge"><?php echo $paczkow; ?> pcs</span></td>
                        <td>€0.25</td>
                        <td>€<?php echo number_format($suma_paczkow, 2); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if ($grzebieni > 0): ?>
                    <tr>
                        <td>
                            <div class="product-row">
                                <i class="fas fa-cookie-bite product-icon"></i>
                                <div class="product-info">
                                    <h4>Cookies</h4>
                                    <div class="product-price">Traditional baked goods</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="quantity-badge"><?php echo $grzebieni; ?> pcs</span></td>
                        <td>€0.30</td>
                        <td>€<?php echo number_format($suma_grzebieni, 2); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if ($ciast > 0): ?>
                    <tr>
                        <td>
                            <div class="product-row">
                                <i class="fas fa-birthday-cake product-icon"></i>
                                <div class="product-info">
                                    <h4>Cakes</h4>
                                    <div class="product-price">Homemade baked goods</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="quantity-badge"><?php echo $ciast; ?> pcs</span></td>
                        <td>€4.00</td>
                        <td>€<?php echo number_format($suma_ciast, 2); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if ($kawy > 0): ?>
                    <tr>
                        <td>
                            <div class="product-row">
                                <i class="fas fa-coffee product-icon"></i>
                                <div class="product-info">
                                    <h4>Coffee</h4>
                                    <div class="product-price">Freshly roasted</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="quantity-badge"><?php echo $kawy; ?> pcs</span></td>
                        <td>€2.10</td>
                        <td>€<?php echo number_format($suma_kawy, 2); ?></td>
                    </tr>
                    <?php endif; ?>

                    <?php if ($rabat > 0): ?>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Discount (10%):</td>
                        <td style="color: #28a745; font-weight: 600;">-€<?php echo number_format($rabat, 2); ?></td>
                    </tr>
                    <?php endif; ?>

                    <tr class="total-row">
                        <td colspan="3" style="text-align: right; font-weight: 700;">TOTAL TO PAY:</td>
                        <td style="font-weight: 700;">€<?php echo number_format($suma_po_rabacie, 2); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="action-buttons">
                <a href="index.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to Order
                </a>
                <a href="#" class="btn btn-primary" onclick="confirmOrder()">
                    <i class="fas fa-credit-card"></i> Confirm and Pay
                </a>
            </div>
        </div>

        <div class="order-image">
            <img src="paczek.jpg" alt="Fresh baked goods">
        </div>

        <div class="features">
            <div class="feature">
                <i class="fas fa-truck"></i>
                <h4>Fast Delivery</h4>
                <p>Within 30 minutes</p>
            </div>
            <div class="feature">
                <i class="fas fa-shield-alt"></i>
                <h4>Secure Payments</h4>
                <p>SSL encryption</p>
            </div>
            <div class="feature">
                <i class="fas fa-phone"></i>
                <h4>24/7 Support</h4>
                <p>Always available</p>
            </div>
        </div>
    </div>

    <script>
        function confirmOrder() {
            alert('Thank you for your order! 🎉\n\nYour order has been accepted and is being prepared.\n\nOrder number: #' + Math.floor(Math.random() * 10000) + '\n\nYou will receive a notification about the delivery status.');
        }

        // Animacja sukcesu
        document.addEventListener('DOMContentLoaded', function() {
            const summary = document.querySelector('.order-summary');
            summary.classList.add('success-animation');
        });

        // Dodanie efektu hover na przyciski
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
    
    <!-- Dodatkowe funkcje JavaScript -->
    <script src="script.js"></script>
</body>
</html>
