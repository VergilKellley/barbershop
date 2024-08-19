let menuToggle = document.querySelector('.menuToggle');
let header = document.querySelector('header');
let section = document.querySelector('section');

menuToggle.onclick = function() {
    header.classList.toggle('active');
    section.classList.toggle('active');
}

// SERVICES PAGE SLIDER

// const slider = document.querySelectorAll('.slide');

// const Prev =() => {
//     counter--
//     slideImg()
// }

// const Next =() => {
//     counter++
//     slideImg()
// }

// let counter = 0;
// slider.forEach((slide, index) => {
//     slide.style.left = `${index * 100}%`
// })

// const slideImg = () => {
//     for (let i = 0; i < slider.length; i++) {
//         if (counter >= slider.length) {
//             slider.forEach(slide => {
//                 slide.style.transform = `translateX(-${counter * 0 }%)`
//             })
//         } else {
//             slider.forEach(slide => {
//                 slide.style.transform = `translateX(-${counter * 100}%)`
//             })
//         }
//     }
// }



//////////////// Scroll Reveal /////////////////

// ScrollReveal({ 
//     // reset: true,
//     distance: '80px',
//     duration: 1000,
//     delay: 100
// });

// ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
// ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .content form', { origin: 'bottom' });
// ScrollReveal().reveal('.rotate-img-heading', { origin: 'right' });
// ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left' });
// ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right' });

// // ///////////// Typed js /////////////

// function Typed(strings, typeSpeed, backspeed, backDelay, loop){
//     this.strings = strings;
//     this.typeSpeed = typeSpeed;
//     this.backSpeed = backspeed;
//     this.backDelay = backDelay;
//     this.loop = loop;
// }

// const typed = new Typed('.multiple-text', {
//     strings:['Full Service Grooming Lounge'],
//     typeSpeed: 75,
//     backSpeed: 50,
//     backDelay: 1000,
//     loop: true
// });
//  document.querySelector(".multiple-text").innerHTML = "We are a " + typed.strings + ".";

// const Typed = new Typed('.multiple-text', {
//     strings:['Full Service Grooming Lounge'],
//     typeSpeed: 75,
//     backSpeed: 50,
//     backDelay: 1000,
//     loop: true

// });