const menu = document.getElementById("menu");
const close = document.getElementById("close");
const navContainer = document.getElementById("nav-container");
const navLinks = document.getElementById("nav-links");

menu.addEventListener("click", (e) => {
    e.preventDefault();

    menu.classList.add("hidden");
  
    navContainer.style.top = 0;

});

close.addEventListener("click", (e) => {
    e.preventDefault();
    navContainer.style.top = '-700px';
    menu.classList.remove("hidden");

});



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

