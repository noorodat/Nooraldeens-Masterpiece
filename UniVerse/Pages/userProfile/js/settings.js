// Start Handle disabled input

let disabledInput = document.getElementById('email');
let changeEmailLink = document.getElementById('changeLink');

changeEmailLink.onclick = () => {
    if (disabledInput.hasAttribute('disabled')) {
        disabledInput.removeAttribute('disabled');
    } else {
        disabledInput.setAttribute('disabled', 'disabled');
    }
};

// End Handle disabled input

