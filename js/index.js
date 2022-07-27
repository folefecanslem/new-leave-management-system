const lock = document.querySelector('.fa-lock');
const pass = document.querySelector('#password');

function show ()
{
    if (pass.type == 'password') {
        pass.type = 'text'
    } else {
        pass.type = 'password'
    }
}

// show and hide box section

$(document).ready(function() {
    $('#togglerBtn').click(function() {
        $('#box').toggle(3000);
    });

    $('#logout').click(function() {
        localStorage.removeItem("loggedIn");
        window.location.href = 'index.php';
        alert('Logout Successful!');
    });
});

//submitting the form and sending the data to the server

const form = document.getElementById('form')
form.onsubmit = (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    if (!email || !password) {
        alert('Email and Password is required');
    } else {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "processing.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    const data = xhr.response;
                    if (data == 200) {
                        localStorage.setItem('loggedIn', JSON.stringify(true));
                        window.location.href = 'services.php'
                        alert('Login Successful!');
                    } else {
                        alert('Invalid login credentials');
                        document.getElementById('email').value = ''
                        document.getElementById('password').value = ''
                    }
                }
            }
        }
        const formData = new FormData(form);
        xhr.send(formData);
    }
}