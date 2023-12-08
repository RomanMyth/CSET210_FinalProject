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


//alert message function
function checkIfMsgSent() {
    var url = window.location.href;
    // showAlert();
    // var alert = showAlert();
    if ((/deniedRegister/).test(url)) {

        // function showAlert() {
        //     const overlay = document.getElementById('overlay');
        //     const alertBox = document.getElementById('alertBox');
        
        //     overlay.style.display = 'flex';
        //     alertBox.style.display = 'block';
        // }

        // showAlert();
        
        // alert(showAlert());

        // const overlay = document.getElementById('overlay');
        // const alertBox = document.getElementById('alertBox');
    
        // overlay.style.display = 'flex';
        // alertBox.style.display = 'block';
      alert('Message has been sent.');
      // bootstrap_alert.warning('Message has been sent.');
    }
  }
