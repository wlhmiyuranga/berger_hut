
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online - Burger Hut</title>
    <link rel="stylesheet" href="oder_online.css"> 
</head>
<body>
    <div class="order-container">
        <h1 class="page-title">Order Online</h1>
        
        <div class="order-grid">
            <!-- Cart Items Section -->
            <div class="cart-section">
                <h2 class="summary-title">Your Cart</h2>
                <div class="cart-items">
                    <!-- Cart Item 1 -->
                    <div class="cart-item">
                        <img src="images\1.4.jpg" alt="Burger" class="cart-item-image">
                        <div class="cart-item-details">
                            <h3 class="item-name">Classic Beef Burger</h3>
                            <p class="item-price">$12.99</p>
                            <div class="quantity-controls">
                                <button class="quantity-btn">-</button>
                                <span>2</span>
                                <button class="quantity-btn">+</button>
                            </div>
                        </div>
                        <button class="remove-btn">Remove</button>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item">
                        <img src="images\1.5.jpg" alt="Fries" class="cart-item-image">
                        <div class="cart-item-details">
                            <h3 class="item-name">Hand-Cut Fries</h3>
                            <p class="item-price">$4.99</p>
                            <div class="quantity-controls">
                                <button class="quantity-btn">-</button>
                                <span>1</span>
                                <button class="quantity-btn">+</button>
                            </div>
                        </div>
                        <button class="remove-btn">Remove</button>
                    </div>
                </div>

                <div class="summary-item">
                    <span>Subtotal:</span>
                    <span>$30.97</span>
                </div>
                <div class="summary-item">
                    <span>Delivery Fee:</span>
                    <span>$3.99</span>
                </div>
                <div class="total-price">
                    <span>Total:</span>
                    <span>$34.96</span>
                </div>
            </div>

            <!-- Checkout Form Section -->
            <div class="checkout-summary">
                <h2 class="summary-title">Checkout Details</h2>
                <form class="checkout-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Delivery Address</label>
                        <textarea id="address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" required>
                    </div>

                    <div class="form-group">
                        <label>Payment Method</label>
                        <div class="payment-methods">
                            <div class="payment-method">Credit Card</div>
                            <div class="payment-method">PayPal</div>
                            <div class="payment-method">Cash</div>
                            <div class="payment-method">Google Pay</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="instructions">Special Instructions</label>
                        <textarea id="instructions" rows="2"></textarea>
                    </div>

                    <button type="submit" class="checkout-btn">Complete Order</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>