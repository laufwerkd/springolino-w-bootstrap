let footerElements = document.querySelectorAll("a.footerHover");

footerElements.forEach(el => {
    el.addEventListener("mouseenter", function() {
        el.style.textDecoration = "underline";
    });
    
    el.addEventListener("mouseleave", function() {
        el.style.textDecoration = "none";
    });
});

