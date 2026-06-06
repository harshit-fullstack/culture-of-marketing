document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector(".menu-btn");
  const navLinks = document.querySelector(".nav-links");

  if (menuBtn && navLinks) {
    menuBtn.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  }
  menuBtn.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
});

// video-pop-up 





   document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.video-wrapper').forEach(wrapper => {
    const playButton = wrapper.querySelector('.video-button-2, .video-trigger');
    const videoContainer = wrapper.querySelector('.video-container');
    const closeButton = wrapper.querySelector('.close-video');
    const iframe = videoContainer.querySelector('iframe');
    const videoSrc = playButton.getAttribute('href') || playButton.dataset.video;

    // Show video popup
    playButton.addEventListener('click', function(e) {
      e.preventDefault(); // This line MUST be here
      videoContainer.style.display = 'flex';
      iframe.src = videoSrc;
    });

    // Hide video popup and stop video
    closeButton.addEventListener('click', function() {
      videoContainer.style.display = 'none';
      iframe.src = '';
    });

    videoContainer.addEventListener('click', function(e) {
      if (e.target === videoContainer) {
        videoContainer.style.display = 'none';
        iframe.src = '';
      }
    });

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        videoContainer.style.display = 'none';
        iframe.src = '';
      }
    });
  });
});


// document.addEventListener("DOMContentLoaded", () => {
//   const megaMenus = document.querySelectorAll(".mega-box");

//   megaMenus.forEach((menu) => {
//     menu.addEventListener("mouseenter", () => {
//       const rect = menu.getBoundingClientRect();
//       if (rect.bottom > window.innerHeight) {
//         menu.style.top = `${window.innerHeight - rect.height - 10}px`; 
//       }
//     });

//     menu.addEventListener("mouseleave", () => {
//       menu.style.top = "100%"; 
//     });
//   });
// });


const track = document.querySelector('.logos-track');
let isDragging = false;
let startX;
let scrollLeft;

// Mouse down event
track.addEventListener('mousedown', (e) => {
  isDragging = true;
  track.style.animationPlayState = 'paused'; // Pause animation
  startX = e.pageX - track.offsetLeft;
  scrollLeft = track.scrollLeft;
});

// Mouse move event
track.addEventListener('mousemove', (e) => {
  if (!isDragging) return;
  e.preventDefault();
  const x = e.pageX - track.offsetLeft;
  const walk = (x - startX) * 2; // Adjust scroll speed
  track.scrollLeft = scrollLeft - walk;
});

// Mouse up and leave events
track.addEventListener('mouseup', () => {
  isDragging = false;
  track.style.animationPlayState = 'running'; // Resume animation
});
track.addEventListener('mouseleave', () => {
  isDragging = false;
  track.style.animationPlayState = 'running'; // Resume animation
});

// Ensure seamless looping
track.addEventListener('animationiteration', () => {
  track.scrollLeft = 0; // Reset scroll position for seamless looping
});

document.addEventListener("DOMContentLoaded", function () {
  function animateNumber(element, target) {
    if (!element) {
      console.error("Element not found");
      return;
    }
    console.log("Animating:", element.id, "to", target);
    let count = 0;
    let speed = Math.ceil(target / 150);
    let interval = setInterval(() => {
      count += speed;
      if (count >= target) {
        count = target;
        clearInterval(interval);
      }
      element.textContent = count + (target === 90 ? '%' : '+');
    }, 30);
  }

  animateNumber(document.getElementById("years"), 13);
  animateNumber(document.getElementById("projects"), 1100);
  animateNumber(document.getElementById("industries"), 15);
  animateNumber(document.getElementById("repeat"), 90);
});

document.addEventListener("DOMContentLoaded", function () {
  // Select all FAQ question containers
  let faqQuestionContainers = document.querySelectorAll("[unique-script-id='w-w-dm-id'] .faq-question-container");

  // Add click event listener to each question container
  faqQuestionContainers.forEach(function (faqQuestionContainer) {
    faqQuestionContainer.addEventListener("click", function () {
      // Toggle the 'active' class on the parent .faq element
      this.parentElement.classList.toggle("active");
    });
  });
});

// faq 
document.addEventListener("DOMContentLoaded", function () {
  var questions = document.querySelectorAll(".faq-question");

  questions.forEach(function (question) {
    question.addEventListener("click", function () {
      var answer = this.nextElementSibling;
      var icon = this.querySelector(".icon");

      // Check if the answer is already visible
      var isVisible = answer.style.maxHeight;

      // Close all other answers first
      document.querySelectorAll(".faq-answer").forEach(function (item) {
        item.style.maxHeight = null;
      });

      document.querySelectorAll(".icon").forEach(function (iconItem) {
        iconItem.innerHTML = "+";
      });

      // Toggle the clicked answer
      if (!isVisible) {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.innerHTML = "-"; // Change to minus when expanded
      } else {
        icon.innerHTML = "+";
      }
    });
  });
});

// revenue-card 
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-item");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const tabName = tab.getAttribute("data-tab");

      // Remove active class from all
      tabs.forEach((t) => t.classList.remove("active"));
      contents.forEach((c) => c.classList.remove("active"));

      // Add active class to clicked tab and corresponding content
      tab.classList.add("active");
      document.getElementById(tabName).classList.add("active");
    });
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




