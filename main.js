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