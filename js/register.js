// capture the entire form using the form name

const registerForm = document.querySelector('#register');

registerForm.addEventListener('submit', e => {
    // prevents page refresh on submit
    e.preventDefault();

    // capture the email and password
    let email = registerForm.email.value;
    let password = registerForm.password.value;

    // handle registration logic using Firebase
    firebase.auth().createUserWithEmailAndPassword(email,password)
        .then(() => {
            alert('Registration successful, redirecting...');
            // redirect back to login page
            window.location.assign('login.html');
        })
       .catch(err => alert(err.message));
})