// Start Handle active class on side links
let sideLinks = document.querySelectorAll(".sidebar ul li a");

sideLinks.forEach((link) => {
    link.onclick = () => {
        // Remove active class from all links
        sideLinks.forEach((link) => {
            link.classList.remove('active');
        });

        // Add active class to the clicked link
        link.classList.add('active');
    };
});

// End Handle active class on side links