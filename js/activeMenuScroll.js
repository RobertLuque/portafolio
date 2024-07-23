document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".main section");
    const menuLinks = document.querySelectorAll(".nav li a");

    const activateLink = (index) => {
        menuLinks.forEach(link => link.classList.remove("active"));
        menuLinks[index].classList.add("active");
    };

    const handleScroll = () => {
        let currentIndex = sections.length - 1;

        for (let i = 0; i < sections.length; i++) {
            const section = sections[i];
            const rect = section.getBoundingClientRect();
            if (rect.top <= window.innerHeight / 2) {
                currentIndex = i;
            } else {
                break;
            }
        }

        activateLink(currentIndex);
    };

    window.addEventListener("scroll", handleScroll);
});