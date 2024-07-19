const logout = document.getElementById('logout');
logout.addEventListener('click', function () {
    window.location.href = "/";
    preventBack();
});

function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
