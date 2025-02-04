document.querySelectorAll('.payment-method').forEach(item => {
    item.addEventListener('click', () => {
        // Remove active class from all
        document.querySelectorAll('.payment-method').forEach(i => i.classList.remove('active'));
        // Add active class to selected
        item.classList.add('active');
        // Update hidden input
        document.getElementById('selected-payment').value = item.dataset.method;
    });
});