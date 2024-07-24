document.addEventListener("DOMContentLoaded", function() {
    const alert = document.getElementById('success-alert');
    if (alert) {
        setTimeout(function() {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(function() {
                alert.remove();
            }, 500);
        }, 2000); // 2000 ms = 2 seconds
    }
});