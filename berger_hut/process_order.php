<form class="checkout-form" method="POST" action="order.php">
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="address">Delivery Address</label>
        <textarea id="address" name="address" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" required>
    </div>

    <div class="form-group">
        <label>Payment Method</label>
        <div class="payment-methods">
            <input type="radio" name="payment_method" value="Credit Card" required> Credit Card
            <input type="radio" name="payment_method" value="PayPal" required> PayPal
            <input type="radio" name="payment_method" value="Cash" required> Cash
            <input type="radio" name="payment_method" value="Google Pay" required> Google Pay
        </div>
    </div>

    <div class="form-group">
        <label for="instructions">Special Instructions</label>
        <textarea id="instructions" name="instructions" rows="2"></textarea>
    </div>

    <input type="hidden" name="subtotal" value="30.97">
    <input type="hidden" name="delivery_fee" value="3.99">
    <input type="hidden" name="total" value="34.96">

    <button type="submit" class="checkout-btn">Complete Order</button>
</form>
