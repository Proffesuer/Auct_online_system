const resetForm = document.querySelector('#reset');

// function to reset password
function resetPassword(e) {
    e.preventDefault();
    let email = resetForm.email.value;

    // call firebase reset function
    firebase.auth().sendPasswordResetEmail(email)
        .then(() => {
            alert(`Password reset link has been sent to ${ email }.`)
        })
        .catch(err => alert(err.message));
}
resetForm.addEventListener('submit', resetPassword);