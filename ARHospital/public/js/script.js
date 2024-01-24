const menu = document.getElementById("menu");
const close = document.getElementById("close");
const navContainer = document.getElementById("nav-container");
const navLinks = document.getElementById("nav-links");

menu.addEventListener("click", (e) => {
    e.preventDefault();

    menu.classList.add("hidden");
    navContainer.classList.remove("hidden");

    if (window.innerWidth < 1024) {
        navLinks.classList.remove("animate__zoomOut");
        navLinks.classList.add("animate__animated", "animate__zoomIn");
    }
});

close.addEventListener("click", (e) => {
    e.preventDefault();

    // Toggle the 'hidden' class for both menu and navLinks
    menu.classList.remove("hidden");
    navContainer.classList.add("hidden");

    // Check if the screen is not large (lg)
    if (window.innerWidth < 1024) {
        navLinks.classList.remove("animate__zoomIn");
        navLinks.classList.add("animate__zoomOut");
    }
});

// Add an event listener to handle animation end and toggle 'hidden' class
navLinks.addEventListener("animationend", () => {
    if (navLinks.classList.contains("animate__zoomOut")) {
        navContainer.classList.add("hidden");
        // Remove the 'animate__zoomOut' class after the animation ends
        navLinks.classList.remove("animate__zoomOut");
    }
});

//

const department = document.querySelectorAll(".department");

department.forEach((dep) => {
    const btn = dep.querySelector(".btn");
    dep.addEventListener("mouseover", () => {
        console.log(dep);
        btn.classList.remove("hidden");
    });
    dep.addEventListener("mouseout", () => {
        btn.classList.add("hidden");
    });
});

