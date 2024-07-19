if(window.location.pathname == "/" || window.location.pathname == "/index.php" ) {
    document.addEventListener('DOMContentLoaded', function() {
        const loginForm = document.getElementById("login-form");
    
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
    
            if(!username || !password) {
                alert("Invalid credentials");
                return;
            }
    
            const xhr = new XMLHttpRequest();
    
            console.log(xhr);
            xhr.open('POST', './includes/users.inc.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
            xhr.onload = function() {
                const response = JSON.parse(xhr.responseText);
                if(xhr.status === 200) {
                    const roleUsers = response;
                    user = roleUsers.first_name;
                    id = roleUsers.id;

                    if(roleUsers.message === 'users') {
                        window.location.href = `./pages/home.php?first_name=${encodeURIComponent(user)}&id=${encodeURIComponent(id)}`;
                    }else {
                        window.location.href = `./pages/admin-dashboard.php?first_name=${encodeURIComponent(user)}&id=${encodeURIComponent(id)}`;
                    }
                }else {
                    alert(response.message);    
                }
            }
    
            xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
    
        });
    });
    
}else {
    document.addEventListener('DOMContentLoaded', function() {
        const params = new URLSearchParams(window.location.search);
        const firstName = params.get("first_name");
        const greet = document.getElementById("greetings");
        const currWin = window.location.pathname;
        console.log(currWin);
        if(currWin === '/pages/admin-dashboard.php') {
            greet.textContent = `Hello Admin, ${firstName}!`;
        }else {
            greet.textContent = `Hello, ${firstName}!`;
        }
    });    
}




