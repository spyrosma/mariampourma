// script.js
document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.querySelector('.nav-toggle');
    const navList = document.querySelector('.main-nav');

    navToggle.addEventListener('click', function () {
        navList.classList.toggle('active'); // Toggle the .active class on the nav list
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        const formData = {
            name: form.elements['name'].value,
            email: form.elements['email'].value,
            subject: form.elements['subject'].value,
            message: form.elements['message'].value
        };

        console.log("Form Data:", formData); // For demonstration, log form data to the console

        // Here you would typically send the form data to a server or email service
        alert('Form submitted! Check the console for form data.');
    });
});

