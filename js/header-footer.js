// Function to load HTML into a placeholder
async function loadHTML(elementId, fileName, callback) {
    const response = await fetch(fileName);
    if (response.ok) {
        const content = await response.text();
        document.getElementById(elementId).innerHTML = content;
        if (callback) callback(); // Execute callback if provided
    } else {
        console.error(`Failed to load ${fileName}`);
    }
}

// Function to set the active tab
function setActiveTab() {
    const currentPage = location.pathname.split("/").pop(); // Get the current page
    const navLinks = document.querySelectorAll(".nav-link"); // Find all navigation links

    navLinks.forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active"); // Add the active class
        } else {
            link.classList.remove("active"); // Remove the active class from others
        }
    });
}

// Load header and footer and set active tab
document.addEventListener("DOMContentLoaded", () => {
    loadHTML("header", "includes/header.html", setActiveTab); // Load header and set active tab
    loadHTML("footer", "includes/footer.html"); // Load footer
});
