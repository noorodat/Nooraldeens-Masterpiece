// Start Menu

let menu = document.getElementById("menu");

menu.onclick = () => {
    document.querySelector("nav .links").classList.toggle("active");
}

// End Menu

// Start Text Opacity


// Wait for the page to load
window.addEventListener('load', function () {
    // Get the .text element
    const landingText = document.getElementById('landingText');
    // Add the 'visible' class to make the element visible (opacity 1)
    landingText.classList.add('visible');
});

// End Text Opacity





