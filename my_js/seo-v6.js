const menuItems = document.querySelectorAll('#menu li');
const sections = document.querySelectorAll('.seo-section');

menuItems.forEach(item => {
  item.addEventListener('click', () => {
    // Reset all menu items
    menuItems.forEach(el => el.classList.remove('menu-item-active'));
    item.classList.add('menu-item-active');

    // Hide all content sections
    sections.forEach(section => section.classList.remove('section-active'));

    // Show the clicked section
    const target = item.getAttribute('data-target');
    document.getElementById(target).classList.add('section-active');
  });
});


let index = 0;

function showSlide() {
  const slider = document.getElementById('slider');
  const slides = document.querySelectorAll('.testimonial-item');
  const slideWidth = slides[0].offsetWidth;

  if (index >= slides.length) index = 0;
  if (index < 0) index = slides.length - 1;

  slider.style.transform = `translateX(-${index * slideWidth}px)`;
}

function nextSlide() {
  index++;
  showSlide();
}

function prevSlide() {
  index--;
  showSlide();
}

// Auto-slide every 5 seconds
// let autoSlide = setInterval(() => {
//   nextSlide();
// }, 5000);
setInterval(() => {
  nextSlide();
}, 5000); // Adjust the interval time (5000ms = 5 seconds)

// Pause auto-slide on hover
const wrapper = document.getElementById('testimonial-wrapper');
wrapper.addEventListener('mouseenter', () => clearInterval(autoSlide));
wrapper.addEventListener('mouseleave', () => {
  autoSlide = setInterval(() => nextSlide(), 5000);
});

// Swipe support
let start = 0;
wrapper.addEventListener('touchstart', (e) => {
  startX = e.touches[0].clientX;
});

wrapper.addEventListener('touchend', (e) => {
  const endX = e.changedTouches[0].clientX;
  const diff = startX - endX;

  if (diff > 50) nextSlide();  // Swipe left
  if (diff < -50) prevSlide(); // Swipe right
});

// Recalculate slide on window resize
window.addEventListener('resize', showSlide);

// Initial call
window.onload = showSlide;

let currentIndex = 0;

const slider = document.getElementById("cardSlider");
const cards = slider.children;
const totalCards = cards.length;

// Desktop Arrow
const leftArrow = document.getElementById("leftArrow");
leftArrow.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % totalCards;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

// Mobile Arrows
const mobileLeftArrow = document.getElementById("mobileLeftArrow");
const mobileRightArrow = document.getElementById("mobileRightArrow");

mobileRightArrow.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % totalCards;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

mobileLeftArrow.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + totalCards) % totalCards;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

// before-after
function initGraphicSlider(container) {
  const slider = container.querySelector('.graphic-slider');
  const handle = container.querySelector('.graphic-handle');
  const afterImage = container.querySelector('.graphic-img-after');

  let isDragging = false;

  function setSliderPosition(clientX) {
    const rect = container.getBoundingClientRect();
    let offsetX = clientX - rect.left;
    offsetX = Math.max(0, Math.min(offsetX, rect.width));
    const percentage = (offsetX / rect.width) * 100;

    slider.style.left = `${percentage}%`;
    handle.style.left = `${percentage}%`;
    afterImage.style.clipPath = `inset(0 0 0 ${percentage}%)`;
  }

  function hideLabels() {
    container.classList.add('graphic-hide-labels');
  }

  function showLabels() {
    if (!isDragging) container.classList.remove('graphic-hide-labels');
  }

  function handleDragEvents(dragEl) {
    dragEl.addEventListener('mousedown', (e) => {
      isDragging = true;
      hideLabels();
      e.preventDefault();
    });

    dragEl.addEventListener('touchstart', (e) => {
      isDragging = true;
      hideLabels();
      e.preventDefault();
    });
  }

  handleDragEvents(handle);
  handleDragEvents(slider);

  window.addEventListener('mouseup', () => {
    isDragging = false;
    showLabels();
  });

  window.addEventListener('touchend', () => {
    isDragging = false;
    showLabels();
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    setSliderPosition(e.clientX);
  });

  window.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    setSliderPosition(e.touches[0].clientX);
  });

  container.addEventListener('mouseenter', () => {
    if (!isDragging) container.classList.add('graphic-hover-active');
  });

  container.addEventListener('mouseleave', () => {
    container.classList.remove('graphic-hover-active');
  });

  [slider, handle].forEach(el => {
    el.addEventListener('mouseenter', () => container.classList.remove('graphic-hover-active'));
    el.addEventListener('mouseleave', () => {
      if (!isDragging) container.classList.add('graphic-hover-active');
    });
  });
}

// Auto-init all sliders
document.querySelectorAll('.graphic-slider-instance').forEach(initGraphicSlider);



// image-change-
// image-change-
const images = [
  { src: "images.jpg", alt: "Design Preview 1" },
  { src: "img/blog/blog.png", alt: "Design Preview 2" },
  { src: "images.jpg", alt: "Design Preview 3" }
];

let carouselIndex = 0; // Renamed to avoid conflict

setInterval(() => {
  carouselIndex = (carouselIndex + 1) % images.length;
  const img = document.getElementById("carouselImage");
  img.style.opacity = 0;

  setTimeout(() => {
    img.src = images[carouselIndex].src;
    img.alt = images[carouselIndex].alt;
    img.style.opacity = 1;
  }, 500);
}, 10000); // 10 seconds

// we-design-slider 
let ecSliderCurrentIndex = 1;
const ecSliderSlider = document.getElementById('ecSliderSlider');
const ecSliderSlides = ecSliderSlider.children;
const ecSliderTotal = ecSliderSlides.length;

ecSliderSlider.style.transform = `translateX(-${ecSliderCurrentIndex * 100}%)`;
ecSliderUpdateSlideClasses();

function ecSliderMoveSlide(direction) {
  ecSliderCurrentIndex += direction;
  ecSliderSlider.style.transition = 'transform 0.4s ease-in-out';
  ecSliderSlider.style.transform = `translateX(-${ecSliderCurrentIndex * 100}%)`;

  setTimeout(() => {
    if (ecSliderCurrentIndex === 0) {
      ecSliderCurrentIndex = ecSliderTotal - 2;
      ecSliderSlider.style.transition = 'none';
      ecSliderSlider.style.transform = `translateX(-${ecSliderCurrentIndex * 100}%)`;
    } else if (ecSliderCurrentIndex === ecSliderTotal - 1) {
      ecSliderCurrentIndex = 1;
      ecSliderSlider.style.transition = 'none';
      ecSliderSlider.style.transform = `translateX(-${ecSliderCurrentIndex * 100}%)`;
    }
    ecSliderUpdateSlideClasses();
  }, 400);
}

function ecSliderUpdateSlideClasses() {
  for (let i = 0; i < ecSliderSlides.length; i++) {
    ecSliderSlides[i].classList.remove('active', 'left', 'right');
  }

  ecSliderSlides[ecSliderCurrentIndex].classList.add('active');
  if (ecSliderCurrentIndex > 0) {
    ecSliderSlides[ecSliderCurrentIndex - 1].classList.add('left');
  }
  if (ecSliderCurrentIndex < ecSliderTotal - 1) {
    ecSliderSlides[ecSliderCurrentIndex + 1].classList.add('right');
  }
}



// for case study 

const MyServiceToggle = {
  init: function () {
    document.querySelectorAll('.js-toggle-btn').forEach(button => {
      button.addEventListener('click', function () {
        MyServiceToggle.toggleContent(button);
      });
    });
  },

  // Function to toggle the content and rotate the arrow
  toggleContent: function (button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');

    // Toggle visibility of content
    content.classList.toggle('hidden');
    // Toggle the rotation of the arrow icon
    icon.classList.toggle('rotate-180');

    // Optionally close all other content sections
    document.querySelectorAll('.js-toggle-content').forEach(otherContent => {
      if (otherContent !== content) {
        otherContent.classList.add('hidden');
        otherContent.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
      }
    });
  }
};

// Initialize the functionality once the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
  MyServiceToggle.init();
});


// video 


