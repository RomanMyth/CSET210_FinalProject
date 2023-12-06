function showAlert() {
    const overlay = document.getElementById('overlay');
    const alertBox = document.getElementById('alertBox');

    overlay.style.display = 'flex';
    alertBox.style.display = 'block';
}

function hideAlert() {
    const overlay = document.getElementById('overlay');
    const alertBox = document.getElementById('alertBox');

    overlay.style.display = 'none';
    alertBox.style.display = 'none';
}

function resetForm() {
    document.getElementById('form').reset();
    hideAlert();
}