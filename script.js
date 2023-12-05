function order(itemName, price) {
    alert('Order placed for ' + itemName + ' - $' + price);
}

function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === '' || email === '' || message === '') {
        alert('All fields must be filled out');
        return false;
    }

    return true;
}

