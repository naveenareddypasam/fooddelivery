document.addEventListener('DOMContentLoaded', function () {
    const orderForm = document.getElementById('order-form');
    orderForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const address = document.getElementById('address').value;
        alert(`Thank you, ${name}. Your order will be delivered to ${address} shortly.`);
        // Further processing can be added here
    });
});
