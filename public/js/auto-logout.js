// public/js/auto-logout.js
let timeout;

function resetTimer() {
    clearTimeout(timeout);
    timeout = setTimeout(logout, 20000); // 20 seconds (20000 milliseconds)
}

function logout() {
    // Perform logout actions (e.g., redirect to logout route)
    window.location.href = "/login";
}

// Reset the timer on user activity
document.addEventListener("mousemove", resetTimer);
document.addEventListener("keypress", resetTimer);

// Initial timer setup
resetTimer();
