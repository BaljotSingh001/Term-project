document.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.getElementById("signup-form");

    signupForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(signupForm);

        console.log(formData);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../includes/signup.inc.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        console.log(xhr);
        xhr.onload = function() {
            const response = xhr.response;
            if(xhr.status === 200) {
                alert(response);
                signupForm.reset();
                window.location.href = '../../index.php';
            }else {
                alert(this.response);
            }
        }

        xhr.send(formData);
    });
});

const cancelBtn = document.getElementById("cancel");

cancelBtn.addEventListener('click', function() {
    window.location.href = "../index.php"
});
