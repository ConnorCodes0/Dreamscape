// Hamburger

const hamburgerBtn = document.querySelector('.hamburger');

hamburgerBtn.addEventListener('click', () => {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const header = document.querySelector('.header-wrap');
    const logo = document.querySelector('.logo');
    const scrolled = window.scrollY;

    if (header.style.backgroundColor === 'rgba(0, 0, 0, 0.35)') {
        header.style.backgroundColor = '';
    } else if (!header.style.backgroundColor === 'rgba(0, 0, 0, 0.35)' && scrolled <= 10) {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.35)'
    }

    hamburgerMenu.classList.toggle('active');
    hamburgerBtn.classList.toggle('active');
    logo.classList.toggle('active');
});

// Add navbar bg on scroll

document.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    const navbar = document.querySelector('.header-wrap');

    if (!hamburgerBtn.classList.contains('active')) {
        if (scrolled >= 10) {
            navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.35)';
        } else {
            navbar.style.backgroundColor = '';
        }
    }
})


// contact form validation

const inputs = document.querySelectorAll('.form-input');

inputs.forEach(input => {

    input.addEventListener('blur', () => {

        // assigns the correct regular expression and input span based on what input has been selected 
        const submitBtn = document.querySelector('.form-submit');
        let regex;
        let inputSpan;


        switch (input.getAttribute('name')) {
            case 'name':
                regex = /^[a-zA-Z ']+$/i;
                inputSpan = document.querySelector('.name-span');
                break;

            case 'email':
                regex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                inputSpan = document.querySelector('.email-span');
                break;

            case 'message':
                regex = /^[a-zA-Z0-9 ,.'-_$£]/;
                inputSpan = document.querySelector('.message-span');
                break;
        }

            // checks if the value of the input matches the regex and adds a cross or tick whether its true or false
            if (regex.test(input.value)) {
                inputSpan.innerHTML = '<i class="fas fa-check-circle"></i>';
                submitBtn.setAttribute('type', 'submit');

            } else {
                inputSpan.innerHTML = '<i class="fas fa-times-circle"></i>';
                submitBtn.setAttribute('type', 'button');
            }

    })
})


// Google map for about page

function myMap() {
    const mapProp = {
        center: new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
    };

    const map = new google.maps.Map(document.querySelector('.map-container'), mapProp);
}