let pageTitle = document.title;
let navHome = document.querySelector('.navbar_home');
let navSupplies = document.querySelector('.navbar_supplies');
let navAbout = document.querySelector('.navbar_about');
let accentColor = `#9DDE8B`;

if (pageTitle == "Home | Sistem Informasi Apotek"){
    navHome.style.background = accentColor;
}
else if (pageTitle == "Suplies | Sistem Informasi Apotek"){
    navSupplies.style.background = accentColor;
}
else if (pageTitle == "About | Sistem Informasi Apotek"){
    navAbout.style.background = accentColor;
}

document.addEventListener('DOMContentLoaded', (event) => {
    const accountButton = document.getElementById('account_button');
    const accountDropdown = document.getElementById('account_dropdown');

    accountButton.addEventListener('click', (e) => {
        accountDropdown.style.display = 'grid';
        e.stopPropagation();
    });

    document.addEventListener('click', (e) => {
        if (!accountDropdown.contains(e.target) && !accountButton.contains(e.target)) {
            accountDropdown.style.display = 'none';
        }
    });
});