// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu')
mobileMenuButton.addEventListener( 'click', () => { mobileMenu.classList.toggle('hidden'); } )

// Mobile dropdown toggle
const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
const mobileDropdown = document.getElementById('mobile-dropdown')
mobileDropdownButton.addEventListener('click', () => { mobileDropdown.classList.toggle('hidden'); } )

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId)
        if (targetElement) {
            window.scrollTo( {
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            } )
            // Close mobile menu if open
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        }
    });
});

// Add animation to elements when they come into view
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.fade-in')
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom
        if (elementTop < window.innerHeight && elementBottom > 0) {
            element.style.opacity = '1';
        }
    });
}
window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);

// clipboard
const FILE_SPANS = document.querySelectorAll(`.file-path, .folder-path`);
Array.from(FILE_SPANS).forEach(span => {
    span.addEventListener(`click`, event => {
        const COPY_TEXT = event.target.innerText;
    
        navigator.clipboard.writeText(COPY_TEXT).then(() => {
        });
    });
});

// Input validation
function validateForm() {
    var a, b, c, d;

    a = document.forms["name"]["inputy"].value;
    b = document.forms["mail"]["inputy"].value;
    c = document.forms["tema"]["inputy"].value;
    d = document.forms["tekst"]["inputy"].value;

    if (a == "" || b == "" || c == "" || d == "") {
        alert("Form must be filled out");
        return false;
    }
}