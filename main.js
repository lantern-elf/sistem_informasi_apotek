let urlLocate = window.location.pathname;
let navHome = document.querySelector('.navbar_home');
let navSupplies = document.querySelector('.navbar_supplies');
let navAbout = document.querySelector('.navbar_about');
let accentColor = `#9DDE8B`;

if (urlLocate == "/supplies.php"){
    navSupplies.style.background = accentColor;
}
else if (urlLocate == "/index.php"){
    navHome.style.background = accentColor;
}
else if (urlLocate == "/about.php"){
    navAbout.style.background = accentColor;
}

document.addEventListener('DOMContentLoaded', (event) => {
    const accountButton = document.getElementById('account_button');
    const accountDropdown = document.getElementById('account_dropdown');

    // Toggle dropdown visibility on button click
    accountButton.addEventListener('click', (e) => {
        accountDropdown.style.display = 'grid';
        e.stopPropagation(); // Prevent click event from propagating to the document
    });

    // Hide dropdown when clicking outside of it
    document.addEventListener('click', (e) => {
        if (!accountDropdown.contains(e.target) && !accountButton.contains(e.target)) {
            accountDropdown.style.display = 'none';
        }
    });
});