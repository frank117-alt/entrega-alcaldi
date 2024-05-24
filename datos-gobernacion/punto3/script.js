document.getElementById('registrationForm').addEventListener('submit', function(event) {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    
    // Validación básica
    if (name === '' || email === '' || password === '') {
        alert('Todos los campos son obligatorios.');
        event.preventDefault();
    } else if (!validateEmail(email)) {
        alert('ingrese un email válido.');
        event.preventDefault();
    } else if (password.length < 6) {
        alert('debe tener al menos 6 caracteres.');
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}//validacion email
