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

// Start Handle Save Changes

let saveChangesBtn = document.getElementById('saveChanges');

saveChangesBtn.onclick = () => {
    Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Save',
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Saved!', '', 'success').then(() => {
                // Navigate to another page here
                window.location.href = '/masterpiece/Nooraldeens-Masterpiece/UniVerse/Pages/userProfile/profile.php'; // Replace with the actual URL
            });
        }
    });
}

// End Handle Save Changes