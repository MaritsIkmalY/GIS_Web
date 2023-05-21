const button = document.querySelector('button[aria-label="Main menu"]');
const mobileMenu = document.querySelector(".hidden.md\\:hidden");
let isMenuOpen = false;

button.addEventListener("click", () => {
    isMenuOpen = !isMenuOpen;
    mobileMenu.classList.toggle("block", isMenuOpen);
    mobileMenu.classList.toggle("hidden", !isMenuOpen);
    button.setAttribute("aria-expanded", isMenuOpen);
});
