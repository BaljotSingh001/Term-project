let getbookMovieID = document.querySelectorAll(".movie-id");
let getbookDeleteID = document.querySelectorAll(".delete-btn");


getbookMovieID.forEach(function (movie) {

    let path = window.location.pathname;

    if(path === '/pages/admin-dashboard.php') {
        movie.style.display = 'none';
    }else {
        movie.style.visibility = 'visible';
    }

    movie.addEventListener('click', function () {
        const params = new URLSearchParams(window.location.search);
        const userId = params.get('id');
        let movieID = this.getAttribute('data-movie-id');

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../includes/movies.inc.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
                alert("You successfully Booked the movie");
            } else {
                alert(xhr.responseText);
            }
        }

        xhr.send('action=insert&movie_id=' + encodeURIComponent(movieID) + '&user_id=' + encodeURIComponent(userId));
    });
});


getbookDeleteID.forEach(function(movie) {
    let path = window.location.pathname;

    if(path === '/pages/admin-dashboard.php') {
        movie.style.visibility = 'visible';
    }else {
        movie.style.display = 'none';
    }

    movie.addEventListener('click', function() {
        const params = new URLSearchParams(window.location.search);
        const userId = params.get('id');
        let movieID = this.getAttribute('data-movie-id');
        
        const text = "Are You Sure You Want to Delete this?";
        if(confirm(text) == true) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../includes/movies.inc.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    alert("You successfully Delete The Movie From List");
                    window.location.reload();
                }
            }
            xhr.send('action=delete&movie_id=' + encodeURIComponent(movieID) + '&user_id=' + encodeURIComponent(userId));
        }else {
            alert("Delete Unsuccessful");
        }
    });
});

