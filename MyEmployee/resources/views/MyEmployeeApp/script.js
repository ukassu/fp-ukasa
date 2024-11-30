//login logic



//register logic



//navbar logic
const lists = document.querySelectorAll(".nav-item .nav-link");
const navPointer = document.querySelector(".nav-higlighter");

const setHighlightPosition = (element) => {
    const parent = element.parentElement; 
    const rect = parent.getBoundingClientRect();
    navPointer.style.width = `${rect.width}px`;
    navPointer.style.left = `${parent.offsetLeft}px`;
};

lists.forEach((link, index) => {
    link.addEventListener("click", () => {
        setHighlightPosition(link);

        localStorage.setItem("activeNav", index);
    });
});

window.addEventListener("DOMContentLoaded", () => {
    const activeIndex = localStorage.getItem("activeNav");
    if (activeIndex !== null) {
        const activeElement = lists[activeIndex];
        setHighlightPosition(activeElement);
    } else {
        setHighlightPosition(lists[0]);
    }
});
