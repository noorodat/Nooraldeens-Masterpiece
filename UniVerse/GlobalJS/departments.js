// Handle Swiping elements
var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
    },
  });
  

// Handle text animation
const elts = {
  text1: document.getElementById("text1"),
  text2: document.getElementById("text2")
};

let pathArray = window.location.pathname.split('/');
let folderName = pathArray[pathArray.length - 2]; // Get the second-to-last element
console.log(folderName);

// import { texts } from '../Pages/deparments/IT/IT.js';

import(`../Pages/deparments/${folderName}/${folderName}.js`)
.then(module => {
console.log(module.texts)
const morphTime = 1;
const cooldownTime = 0.25;

let textIndex = module.texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = module.texts[textIndex % module.texts.length];
elts.text2.textContent = module.texts[(textIndex + 1) % module.texts.length];

function doMorph() {
  morph -= cooldown;
  cooldown = 0;

  let fraction = morph / morphTime;

  if (fraction > 1) {
      cooldown = cooldownTime;
      fraction = 1;
  }

  setMorph(fraction);
}

function setMorph(fraction) {
  elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  fraction = 1 - fraction;
  elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
  elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

  elts.text1.textContent = module.texts[textIndex % module.texts.length];
  elts.text2.textContent = module.texts[(textIndex + 1) % module.texts.length];
}

function doCooldown() {
  morph = 0;

  elts.text2.style.filter = "";
  elts.text2.style.opacity = "100%";

  elts.text1.style.filter = "";
  elts.text1.style.opacity = "0%";
}

function animate() {
  requestAnimationFrame(animate);

  let newTime = new Date();
  let shouldIncrementIndex = cooldown > 0;
  let dt = (newTime - time) / 1000;
  time = newTime;

  cooldown -= dt;

  if (cooldown <= 0) {
      if (shouldIncrementIndex) {
          textIndex++;
      }

      doMorph();
  } else {
      doCooldown();
  }
}

animate();

});






// Handle buy button in courses

// let buyCourseButtons = document.querySelectorAll(".buyCourse");

// buyCourseButtons.forEach(buyBtn => {
//   buyBtn.onclick = () => {
//     console.log("Clikced");
//   }
// })